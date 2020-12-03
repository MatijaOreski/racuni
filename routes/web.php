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

Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@login');

Route::get('/pocetna', 'AccountController@index');
Route::get('/novi_racun', 'AccountController@show');
Route::post('/dodaj_racun', 'AccountController@store');

Route::get('/stavke/{id}', 'ItemController@show');
Route::get('/stavke/dodaj_stavku/{id}', 'ItemController@items');
Route::post('/stavke/dodaj_stavku', 'ItemController@store');

Route::get('/pdf/{id}', 'PdfController@show');