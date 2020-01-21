<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paymentform;
 use Mail;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        return view('checkout.index');
    }

    public function form(Request $request)
    {
       
            
            $paymentform=new paymentform;
           $paymentform->name=$request->name;
           $paymentform->email=$request->email;
            $paymentform->phone=$request->phone;
            $paymentform->save();
            Mail::send('payment.success',[
                'name'=>$request->name,
                'phone'=> $request->phone,
              ], function($mail)use($request){
                $mail->from($request->email,$request->name);
                $mail->to('omidioraemmanuel@gmail.com')->subject('Order from Zamansuya by ' . $request->name,$request->phone);
              
              });
         

            return redirect('payment-successful');
           


            

    }
}
