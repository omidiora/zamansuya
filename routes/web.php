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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/home','homecontroller@home');
Route::get('/about','homecontroller@about');

Route::get('suya','homecontroller@index')->name('suya');
//admin route
Route::resource('adminzaman','AdminController');
Route::post('/cart','ShoppingController@addcart')->name('cart.add');
