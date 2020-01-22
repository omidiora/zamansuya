<?php

namespace App\Http\Controllers;


use App\Admin;

class IndexController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function index()
    {
        $zaman=Admin::all();
        return view('product')->with('zaman',$zaman);
    }

    public function show($slug)
    {
      $productdetail=Admin::where('slug',$slug)->first();
        return view('productDetail')->with('productdetail',$productdetail);
    }

}
