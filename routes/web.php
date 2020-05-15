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

Route::get('/lar', function () {
    return view('welcome');
});

Route::get('/loginadmin' , 'AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/Adminbarber', 'AdminBarberController@index2');
    Route::post('/Adminbarber/create', 'AdminBarberController@create');
    Route::get('/Adminbarber/{id}/delete', 'AdminBarberController@delete');
    Route::get('/Booking', 'AdminBarberController@index');
    Route::get('/Transaksi', 'TransaksiController@index');
    Route::get('/Transaksi/{id}/delete', 'TransaksiController@delete');
});