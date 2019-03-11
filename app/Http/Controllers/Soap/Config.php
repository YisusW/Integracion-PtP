<?php

namespace App\Http\Controllers\Soap;

use SoapClient;

class Config
{
    // propiedad de la clase que contiene los datos de configuracion para realizar la conexion correcta por soap a el web service

    use Auth;

    protected $wsdl = "soap/redirect?wsdl";

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
        'trace'          => true,
        'cache_wsdl'     => WSDL_CACHE_NONE,
        'stream_context' => stream_context_create($this->getContext()),
        'encoding'       => 'UTF-8',
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
    public function getSoapConection( $endpoint )
    {
        $endpoint = $endpoint . $this->wsdl;

        return new SoapClient( $endpoint , $this->getOptions());
    }

}
