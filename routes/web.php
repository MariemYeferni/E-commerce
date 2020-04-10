<?php

use App\Http\Controllers\CartController;
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
    return view('welcome');
});


/*Products Route*/
Route::get('/boutique','ProductsController@index')->name('Products.index');
Route::get('/boutique/{slug}','ProductsController@show')->name('Products.show');

/*Cart Route*/
Route::POST('/panier/ajouter','CarttController@store')->name('Cart.store');
