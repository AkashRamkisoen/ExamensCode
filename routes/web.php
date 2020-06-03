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
    return view('welcome');
});

Route::group(['middleware' => ['role:owner|moderator|user|deleter']], function (){
    Route::get('products/{product}/delete', 'ProductsController@delete')
        ->name('products.delete');
    Route::resource('/products', 'ProductsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
