<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    /**
     * @param void
     * @return PaymentMethodsController
     */
    private function getControllerPayment()
    {
        return new PaymentMethodsController;
    }
    /**
     * @param void
     * @return TypeDocumentController
     */
    private function getControllerTypeDocument()
    {
        return new TypeDocumentController;
    }

    /**
     * funcion devuelve la colection completa de los paises registrados en la base de datos
     * @param
     * @return response
     */
    public function getAll( Request $request )
    {
        $countries = Country::get(['id' , 'name']);

        return response()->json( array( 'status' => true , 'countries' => $countries ) );
    }

    /**
     * se encarga por medio de otros controladores responder la infocmacion que se relaciona con el pais solicitado
     * @param Request
     * @return json
     */
    public function getInfoToForm( Request $request )
    {
        $country_id = $request->input('country_id');

        $country = Country::where('id' , $country_id)->get()->first();

        $payment_methods = $this->getControllerPayment()->getPaymentMethods( $country );

        $type_document = $this->getControllerTypeDocument()->getTypeDocumentByIdCountry($country);

        return response()->json( array( 'status' => true , 'methods' => $payment_methods , 'type_docucment' => $type_document ) );

    }

}
