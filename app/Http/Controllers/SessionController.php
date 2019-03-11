<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Soap\Config;

class SessionController extends Controller
{
    //
    protected $credentials_web_service;

    /**
     * cuando se hace  el llamado de la funcion, de soap no siempre puede estar bien
     * esto va a depender de las variables  configuradas en el archivo .env
     * funcion encargada de hacer la conexion SOAP
     * @param void
     * @return SoapHeader
     */
    private function getSoapAuth()
    {
        $this->credentials_web_service = (object) config('services.soap');
        $soap = new Config();
        $client = $soap->getSoapConection($this->credentials_web_service->endpoint);
        return $client->__setSoapHeaders( $soap->getSoapHeader() );
    }

    /**
     * funcion encargada de realizar
     * @param Request $request
     * @return response
     */
    public function createSession( Request $request )
    {
        $datos = (object)  $request->input();

        $datos->payment-> = config('app.url');

        $response = $this->createRequest($datos->payment , $datos->payer );

        return response()->json($response);
    }

    /**
     * funcino que se encarga de conectar a el servicio web de place to pay para iniciar la session
     * @param object
     * @param object
     * @return web_service_response
     */
    private function createRequest( $payment, $payer )
    {
        $soap = $this->getSoapAuth();

        $payload = $this->formatPayload( $payment, $payer );

        try {
          return $soap->createRequest($payload)->createRequestResult;
        } catch (\Exception $e) {
          return (object) array('status' => 'false' , 'message' => $e ) ;
        }

    }

    /**
     * funcion encargada de devolver los datos que se necesitan para que la funcion del web service devuelva una respuesta esperada para procesar el pago.
     * @param object $payer
     * @param object $payment
     * @return object
     */
    private function formatPayload( $payment, $payer )
    {
        return array(
          'locale' => ,
          'payer'  => $payer ,
          'buyer' => $payer,
          'payment' => $payment,
          '' => ,
         );
    }

}
