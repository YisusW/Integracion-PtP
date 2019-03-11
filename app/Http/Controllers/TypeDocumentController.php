<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\CountryTypeDocument;

class TypeDocumentController extends Controller
{
    //

    /**
     *
     * @param
     * @return
     */
    public function getTypeDocumentByIdCountry( Country $country )
    {
        return CountryTypeDocument::where( 'country_id' , $country->id )->get();
    }
}
