<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class homecontroller extends Controller
{
    //

    public function home(){
        $zaman=Admin::all();
        return view('index')->with('zaman',$zaman);
    }
    public function index()
    {
        $zaman=Admin::all();
        return view('product')->with('zaman',$zaman);
    }

    public function about(){
    return view('about');
    }

}
