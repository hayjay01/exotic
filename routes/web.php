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
    return view('index');
});


Route::group(['prefix' => 'product'], function(){
	Route::get('/product-name/product-id', 'ProductController@show');
	Route::get('/vegetables', 'ProductController@viewVegetable');

});

// Rout