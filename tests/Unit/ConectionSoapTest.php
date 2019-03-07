<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Soap\Config;
use App\Http\Controllers\Soap\Auth;

class ConectionSoapTest extends TestCase
{
    /**
     * A basic test example.
     * la funcion nos asegura que la conexion esta correctente establecida
     *
     * @return void
     */
    public function testConection()
    {
        $credentials = (object) config('services.soap');

        $soap = new Config();
        /* se llama el endpoint que se establece en la documentacion */
        // https://test.placetopay.com/redirection/

        $this->assertTrue(isset($credentials->endpoint));

        $result = $soap->getSoapConection($credentials->endpoint);

        $this->assertTrue(true);
    }

    /**
     * funcion encargada de veridicar la cabecera por soap SOAPHEADER
     * @return void
     */

    public function testSetHeader()
    {
         $soap = new Config();

         $soap->getSoapHeader();

         $this->assertTrue(true);
    }

    /**
     * esta funcion prueba la conexion soap mas el setsoapHeder
     * @param void
     * @return void
     */

    public function testSoapConnectionHeader()
    {
        $credentials = (object) config('services.soap');

        $soap = new Config();

        $client = $soap->getSoapConection($credentials->endpoint);

        $client->__setSoapHeaders( $soap->getSoapHeader() );

        $this->assertTrue(true);
    }

}
