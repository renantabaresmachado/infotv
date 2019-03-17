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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ProductController@index')->name('indexProducts');

Auth::routes();

Route::post('/product/search' , 'ProductController@search')->name('productsearch');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/marketPlace/register', 'MarketPlaceController@create')->name('marketPlaceRegister');
Route::post('/marketPlace/store', 'MarketPlaceController@store')->name('marketPlaceStore');
Route::get('/procuct/register', 'ProductController@create')->name('productRegister');
Route::post('/product/store', 'ProductController@store')->name('productStore');
