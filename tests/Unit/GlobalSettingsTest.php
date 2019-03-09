<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GlobalSettingsTest extends TestCase
{
    /**
     * A basic unit test example.
     * con esta funcion se verifican que las variables de entorno fueron correctamente configuradas.
     * estas variables que se verifican hacen reeferencia a la información del comercio o la empresa que hace la integracion con la pasarela
     * @return void
     */
    public function testMapVariablesCommerce()
    {
        $commerce_name    = config('app.commerce_name');
        $commerce_manager = config('app.commerce_manager');
        $commerce_phone   = config('app.commerce_phone_number');
        $commerce_email   = config('app.commerce_email');

        if ( $commerce_name == 'INTEGRACION' ) {
            dd( 'Se debe agregar a el archivo .env la variable COMMERCE_NAME' );
        } else if ( $commerce_manager == 'INTEGRACION' ) {
            dd( 'Se debe agregar a el archivo .env la variable COMMERCE_MANAGER' );
        } else if( $commerce_phone == 'INTEGRACION' ){
            dd( 'Se debe agregar a el archivo .env la variable COMMERCE_PHONE_NUMBER' );
        } else if( $commerce_email == 'INTEGRACION' ){
            dd( 'Se debe agregar a el archivo .env la variable COMMERCE_EMAIL_CONTACT' );
        }

        $this->assertTrue( ($commerce_name !== 'INTEGRACION') );
        $this->assertTrue( ($commerce_manager !== 'INTEGRACION') );
        $this->assertTrue( ($commerce_phone !== 'INTEGRACION') );
        $this->assertTrue( ($commerce_email !== 'INTEGRACION') );

    }

    /**
     * A basic unit test example.
     * esta funcion se encarga de realizar la verificacion de las variables para la conexión soap
     * son necesarias para poder hacer la conexion a el webservice de PlacetoPay (Soap)
     * @return void
     */

    public function testMapVariablesSoapService()
    {
        $soap_service_id       = config('services.soap.id_soapWS');
        $soap_service_secret   = config('services.soap.secretkey');
        $soap_service_endpoint = config('services.soap.endpoint');
        $soap_service_wsse     = config('services.soap.wsse');
        $soap_service_wsu      = config('services.soap.wsu');

        if ( $soap_service_id == 'INTEGRATION' ) {
            dd( 'Se debe agregar a el archivo .env la variable SOAP_ID' );
        } else if ( $soap_service_secret == 'INTEGRATION' ) {
            dd( 'Se debe agregar a el archivo .env la variable SOAP_SECRETKEY' );
        } else if( $soap_service_endpoint == 'INTEGRATION' ){
            dd( 'Se debe agregar a el archivo .env la variable SOAP_ENDPOINT' );
        } else if( $soap_service_wsse == 'INTEGRATION' ){
            dd( 'Se debe agregar a el archivo .env la variable SOPA_WSSE' );
        } else if( $soap_service_wsu == 'INTEGRATION' ){
            dd( 'Se debe agregar a el archivo .env la variable SOAP_WSU' );
        }


        $this->assertTrue( ($soap_service_id !== 'INTEGRATION') );
        $this->assertTrue( ($soap_service_secret !== 'INTEGRATION') );
        $this->assertTrue( ($soap_service_endpoint !== 'INTEGRATION') );
        $this->assertTrue( ($soap_service_wsse !== 'INTEGRATION') );
        $this->assertTrue( ($soap_service_wsu !== 'INTEGRATION') );

    }
}
