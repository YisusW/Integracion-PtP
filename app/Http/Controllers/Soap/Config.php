<?php

namespace App\Http\Controllers\Soap;

use SoapClient;
use SoapHeader;
use SoapVar;
use stdClass;

class Config
{
    // propiedad de la clase que contiene los datos de configuracion para realizar la conexion correcta por soap a el web service

    /**
     * esta funcion retorna un array con parametros acerca de la conexion soap que se realizara segun la url que se espera getSoapConection
     * @param void
     * @return array
     */
    private function getOptions()
    {
      return array(
        'soap_version'   => SOAP_1_2,
        'exceptions'     => true,
        'trace'          => false,
        'encoding'       => 'UTF-8',
        'cache_wsdl'     => WSDL_CACHE_NONE,
        'features'       => SOAP_SINGLE_ELEMENT_ARRAYS,
        'stream_context' => stream_context_create($this->getContext())
      );
    }

    /**
     * funcion encargada de realizar configuracion de ssl verificacion más el metodo de encriptación
     * @param void
     * @return array
     */
    private function getContext()
    {
        return array( "ssl" =>
        array(
        'verify_peer'      => false,
        'verify_peer_name' => false,
        'crypto_method'    => STREAM_CRYPTO_METHOD_TLS_CLIENT));
    }

    /**
     * funcionse encarga de configurar la conexion soap.
     * @param url $endpoint
     * @return SoapClient
     */
    public function getSoapConection( $url )
    {
        return new SoapClient( $url , $this->getOptions());
    }

    /**
     * funcion que se encarga de poner las variables necesarias en la cabeceras
     * @param void
     * @return SoapHeader
     */

    private function getSoapHeader()
    {
        $wsse = config('services.soap.wsse');
        $wsu = config('services.soap.wsu');

        $class_object = new stdClass();
        $class_object->Username = new SoapVar($this->login(), XSD_STRING, null, $wsse, null, $wsse);
        $class_object->Password = new SoapVar($this->digest(), XSD_STRING, 'PasswordDigest', null, 'Password', $wsse);
        $class_object->Nonce = new SoapVar($this->getNonce(), XSD_STRING, null, $wsse, null, $wsse);
        $class_object->Created = new SoapVar($this->getSeed(), XSD_STRING, null, $wsu, null, $wsu);

        $security = new stdClass();
        $security->UsernameToken = new SoapVar($class_object, SOAP_ENC_OBJECT, null, $wsse, 'UsernameToken', $wsse);

        return new SoapHeader($wsse, 'Security', $security, true);
    }

}
