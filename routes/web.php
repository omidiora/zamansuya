<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','homecontroller@home');

Route::get('/buy-now/{slug}','homecontroller@show')->name('product.show');

Route::get('/about','homecontroller@about');

Route::get('suya','homecontroller@index')->name('suya');


//admin route
Route::resource('adminzaman','AdminController');
Route::post('/cart','ShoppingController@addcart')->name('cart.add');


//contact us
Route::get('/contact','ContactController@contact');
Route::Post('/contactus','ContactController@contactUSPost')->name('contact');


//cart
Route::get('/cart','CartController@index')->name('cart');
Route::Post('/cart','CartController@store');
Route::delete('/cart/{id}','CartController@destroy')->name('cart.delete');
Route::post('/cart/save-later','CartController@saveForLater')->name('save.later');



Route::get('/cart/empty',function($id){
    Cart::remove($id);
    return bacl()->with('success','Item has been removed');
});
Route::get('/checkout','CheckOutController@index')->name('checkout.index');

    Route::get('cart/decr/{id}',[
        'uses'=>'CartController@decr',
        'as'=>'cart.reduce'
        ]);
    


        Route::get('cart/incr/{id}',[
            'uses'=>'CartController@incr',
            'as'=>'cart.incr',
            ]);
        