<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\CountryTypeDocument;

class TypeDocumentController extends Controller
{
    //

    /**
     * se encarga de  devolver una lista de tipos de documentos segun el pais seleccionado
     * @param Country
     * @return CountryTypeDocument
     */
    public function getTypeDocumentByIdCountry( Country $country )
    {
        return CountryTypeDocument::where( 'country_id' , $country->id )
        ->get(['code' , 'description']);
    }
}
