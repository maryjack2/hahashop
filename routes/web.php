<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
<<<<<<< HEAD


Route::get('/menu',function(){
return menu('frontend','bootstrap');
});

Route::get('/index', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

=======
Route::get('/showcgy/{item}','ItemController@showCgy');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myindex','HomeController@myindex');
Route::get('/category','HomeController@product');
Route::get('/detail','HomeController@detail');
Route::get('/checkout1','HomeController@checkout1');
Route::get('/addcart/{item}','ShopController@addCart');
Route::get('/showcart','ShopController@showCart');
>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312
