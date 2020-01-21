<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;


class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'message' => 'required'
         ]);
         Mail::send('emails.contact-message',[
            'msg'=>$request->message
          ], function($mail)use($request){
            $mail->from($request->email,$request->name);
            $mail->to('Zamansuya@gmail.com')->subject($request->subject);
            
          });
          Session::flash('message','Thanks for contacting us');
          return redirect()->back();
        
    }
 



}
