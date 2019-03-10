<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    /**
     * funcion que devuelve los datos calculados acerca de un producto
     * @param Request
     * @return Request
     */

    public function getInfoAboutProduct( Request $request )
    {
        $price = $request->input('price');
        /* se limpia la variable que viene delfront para realizar el calculo del iva */
        $price = str_replace( ',' ,  '' , $price );
        $result = array( 'status' => true ,
        'iva' => number_format($this->getIva($price),2) ,
        'price' => number_format($price , 2),
        'reference' => $this->getSku(),
        'total' =>  number_format($this->getIva($price) + $price ,2 ) );

        if ( $request->ajax() ) {
          return response()->json( $result );
        }

        return view('home' ,  $result);

    }

    /**
     * funcion encargada de retornara
     * @param int $price
     * @return int $iva
     */
    private function getIva( $price )
    {
        return ($price*0.19);
    }

    /**
     * se crea una referencia aleatoria, para dar paso a los datos de la compra
     * @param int $length
     * @return string
     */

    private function getSku($length = 8)
    {
        return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

}
