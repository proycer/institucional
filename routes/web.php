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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/nosotros', 'HomeController@us')->name('us');
Route::get('/turnos', 'HomeController@schedule')->name('schedule');
Route::get('/catalogo', 'HomeController@list')->name('list');
Route::get('/sitemap.txt', 'HomeController@sitemap');
Route::get('/pagar/{service_id}', 'HomeController@buy')->name('buy');
