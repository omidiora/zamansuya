<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PaymentController extends Controller
{
    //

    
    public function index($email)
    {
     
    return view('payment.index');
    }
    
    
    public function success()
    {
      ;
    return view('payment.success')->with('msg','Payment Successfully');
    }

    
public function paysuccessfully()
{
  return view('payment.paysuccessfully')->with('msg','Payment Successfully');
}



}
