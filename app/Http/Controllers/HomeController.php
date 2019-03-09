<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * funcion encargada de mostrar una vista con
     * @param Request
     * @return view
     */

    public function index( Request $request )
    {
        return view('welcome');
    }

    /**
     * funcion se encarga de mostrar la vista de preguntas frecuentes , que es requerido en la prueba de integración
     * @param Request
     * @return View
     */

    public function fqa(Request $request)
    {
        return view('fqa');
    }
}
