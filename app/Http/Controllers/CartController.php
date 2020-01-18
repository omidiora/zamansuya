<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index()
    {
      
        return view('cart.index');
    }
   
    public function store(Request $request){
      
        $duplicate=\Cart::search(function($cartItem,$rowId)use ($request){
            return $cartItem->id==$request->id;
        });
        if($duplicate->isNotEmpty()){
            return redirect('/cart')->with('success','Item is already in your cart');
        }
        \Cart::add($request->id,$request->name,1,$request->price)->associate('App\Admin');
        return view('cart.index')->with('success','Item was added Successfully');
    }
    public function destroy($id){
    \Cart::remove($id);
    return back()->with('success', 'Item has been removed');
    }
    public function saveForLater($id)
    {
        $item=\Cart::get($id);
        \Cart::remove($id);
        \Cart::instance('saveForLater')->add($item->id,$item->name,$item->price)->associate('App\Admin');
        return redirect(route('cart.index'))->with('success','Item has been Saved for Later');

    }
    
    public function incr($id,$qty)
    {
        \Cart::updated($id,$qty+1);
        
        return redirect()->back();
    }


    public function decr($id,$qty)
    {
        \Cart::updated($id,$qty-1);
        return redirect()->back();
    }
    
}
