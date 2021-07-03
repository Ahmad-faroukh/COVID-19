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


Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@get_statistics')->name('get_statistics');
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
Route::post('/send_mail', 'HomeController@mail')->name('mail');

Auth::routes(['register' => false]);