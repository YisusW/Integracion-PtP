<?php

namespace App\Http\Controllers\Soap;

use \SoapClient;

class SoapConfig
{
    // propiedad de la clase que contiene los datos de configuracion para realizar la conexion correcta por soap a el web service
    protected $options =
    array(
      'soap_version'   => SOAP_1_2,
      'exceptions'     => true,
      'trace'          => 1,
      'cache_wsdl'     => WSDL_CACHE_NONE,
      'stream_context' => $this->getContext()
    );

    /**
     * funcion encargada de realizar configuracion de ssl verificacion más el metodo de encriptación
     * @param void
     * @return array
     */
    private function getContext()
    {
        return stream_context_create(array( "ssl" =>
        array(
        'verify_peer'      => false,
        'verify_peer_name' => false,
        'crypto_method'    => STREAM_CRYPTO_METHOD_TLS_CLIENT)));
    }

    /**
     * funcionse encarga de configurar la conexion soap.
     * @param url $endpoint
     * @return soap_connection
     */
    public function getSoapConection( $endpoint )
    {
        return new SoapClient($endpoint, $this->options );
    }
}
