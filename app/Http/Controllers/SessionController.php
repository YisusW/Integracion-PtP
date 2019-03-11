<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Soap\Config;

class SessionController extends Controller
{
    //
    protected $credentials_web_service;


    /**
     * funcion se encarga de devolver la instancia del controlador
     * @param void
     * @return CountryController
     */

    private function getCountryController()
    {
        return new CountryController;
    }

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
        $client->__setSoapHeaders( $soap->getSoapHeader() );
        return $client;
    }

    /**
     * funcion encargada de realizar
     * @param Request $request
     * @return response
     */
    public function createSession( Request $request )
    {
        $datos = (object) $request->input();

        $returnUrl = config('app.url');

        $country = $this->getCountryController()->getCountry( $datos->payment['country'] );

        $datos->payment['amount']['currency'] = $country->currency;
        $datos->payment['amount']['total'] =  str_replace(',' , '' , $datos->payment['price']);

        $response = $this->createRequest($datos->payment , $datos->payer , $country , $request->ip() , $returnUrl , $request->header('User-Agent') );

        return response()->json($response);
    }

    /**
     * funcino que se encarga de conectar a el servicio web de place to pay para iniciar la session
     * @param object
     * @param object
     * @return web_service_response
     */
    private function createRequest( $payment, $payer, $country, $Ip_address, $returnUrl, $agent )
    {
        $soap = $this->getSoapAuth();

        $payload = $this->formatPayload( $payment, $payer , $country->locale  , $Ip_address , $returnUrl , $agent);

        try {
          return $soap->createRequest($payload);
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
    private function formatPayload( $payment, $payer, $locale ,$Ip_address, $returnUrl, $agent )
    {
        $locale  = utf8_encode($locale) ;
        $Ip_address = utf8_encode($Ip_address) ;
        $returnUrl = utf8_encode($returnUrl) ;
        $agent = utf8_encode($agent) ;

        foreach ($payer as $key => $value) {
          // code...
          $value = utf8_encode($value);
        }

        return json_decode(
        json_encode(
        ['payload' =>
        array(
                  'locale'    => $locale,
                  'payer'     => $payer ,
                  'buyer'     => $payer,
                  'payment'   => $payment,
                  'returnUrl' => $returnUrl,
                  'expiration'=> date('c'),
                  'ipAddress' => $Ip_address,
                  'userAgent' => $agent
            )
        ]));
    }

}
