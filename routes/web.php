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

Route::get('/Adminbarber', 'AdminBarberController@index2' );
Route::post('/Adminbarber/create', 'AdminBarberController@create');
Route::get('/Adminbarber/{id}/delete', 'AdminBarberController@delete');
Route::get('/Booking', 'AdminBarberController@index');