<?php

namespace App\Http\Controllers\Soap;

use SoapHeader;
use SoapVar;
use stdClass;

trait Auth
{

    protected $wsse ;

    protected $wsu ;

    protected $secret_key ;

    /**
     * en el constructor se valida que las variables de entorno se creen correctamente
     * en el archivo enviroment (.env)
     */

    public function __construct()
    {
        $this->wsse = ( null !== config('services.soap.wsse') ) ?
        config('services.soap.wsse') : 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

        $this->wsu = ( null !== config('services.soap.wsu') ) ?
        config('services.soap.wsu') : 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';

        $this->secret_key = (  null !== config('services.soap.secretkey') ) ?
        config('services.soap.secretkey') : false;
    }

    /**
     * funcion que se encarga de poner las variables necesarias en la cabeceras
     * @param void
     * @return SoapHeader
     */

    public function getSoapHeader()
    {
        $class_object = $security = new stdClass();
        /** se verifica de que el valor de la llave secreta realmente exista en las  configuraciones y en las variables de entorno */
        if( $this->secret_key === false ) return false;

        $class_object->Username = new SoapVar('login', XSD_STRING, null, $this->wsse, null, $this->wsse);
        $class_object->Password = new SoapVar($this->getDigest(), XSD_STRING, 'PasswordDigest', null, 'Password', $this->wsse);
        $class_object->Nonce    = new SoapVar($this->getBase64($this->getNonce()), XSD_STRING, null, $this->wsse, null, $this->wsse);
        $class_object->Created  = new SoapVar($this->getSeed(), XSD_STRING, null, $this->wsu, null, $this->wsu);

        $security->UsernameToken = new SoapVar($class_object, SOAP_ENC_OBJECT, null, $this->wsse, 'UsernameToken', $this->wsse);

        return new SoapHeader($this->wsse, 'Security', $security, true);
    }


    /**
     * la funcion se encarga de retornar una fecha en formto particular
     * @param void
     * @return Date
     */

    private function getSeed()
    {
        return date('c');
    }

    /**
     * se encarga de generar un valor randon de 16 caracteres sino se genera un numero aleatorio
     * @param void
     * @return void
     */
    private function getNonce()
    {
        /* se verifica  la existencia de la funcion random_bytes() */
        if (function_exists('random_bytes')) {
            return bin2hex(random_bytes(16));
        /* verificar si existe la funcion openssl_random_pseudo_bytes() */
        } else if (function_exists('openssl_random_pseudo_bytes')) {
            return bin2hex(openssl_random_pseudo_bytes(16));
        }
        /* sino simplemente se genera una simple numero randon sin especificar la longitud */
        return mt_rand();
    }

    /**
     * se devuelve una codificacion en base 64 para realizar varias operaciones con la configuración
     * @param void
     * @return base64_encode
     */
    private function getBase64( $parameter )
    {
        return base64_encode($parameter);
    }

    /**
     * funcion que cifra los datos (credenciales) para agregarla en la cabecera correctamente
     * @param void
     * @return hash con algoritmo sha1
     */

    private function getDigest()
    {
        if( $this->secret_key === false )
          return array( 'status' => false , 'message' => 'La configuración de las variables no está establecida.' );

        return hash('sha1', $this->getNonce() . $this->getSeed() . $this->secret_key , true);
    }
}
