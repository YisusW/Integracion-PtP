<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryPaymentMethod;
use App\Country;

class PaymentMethodsController extends Controller
{
    //

    /**
     * devuelve los datos segun un country_id
     * @param Country
     * @return CountryPaymentMethod
     */
    public function getPaymentMethods( Country $country )
    {
        return CountryPaymentMethod::where('country_id' ,  $country->id )
        ->get(['code', 'description']);
    }
}
