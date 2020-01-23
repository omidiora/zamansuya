<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paymentform;
 use Mail;
 use Session;

class CheckOutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function form(Request $request)
    {
       $this->validate($request,[
         'name'=>'required',
         'email'=>'required|email',
         'phone'=>'required',

       ]);
    
        Mail::send('payment.success',[
        'msg'=>$request->name,
        'phone'=>$request->phone,
      ], function($mail)use($request){
        $mail->from($request->email,$request->name);
        $mail->to('Zamansuya@gmail.com')->subject('Zamansuya Order by'.$request->name);
        
      });
      return redirect()->back();

         
           


            

    }
}
