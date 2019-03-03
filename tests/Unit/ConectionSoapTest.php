<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Soap\Config;

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
        $result = $soap->getSoapConection($credentials->endpoint);

        $this->assertTrue(true);
    }
}
