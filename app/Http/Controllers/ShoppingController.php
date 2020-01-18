<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;


class ShoppingController extends Controller
{
    //
    public function addcart()
    {
       

        $pdf=Admin::find(request()->pdf_id);
        
        $cart=Cart::add([
            'id'=>$pdf->id,
        ]);
        dd(request()->all());
    }
}
