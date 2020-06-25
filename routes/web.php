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
    Route::get('/welcome', 'Front\WelcomeController@index')->name('welcome');
    Route::get('/home', 'Front\HomeController@index')->name('home')->middleware('ordinaryUsers');
    Route::post('/set-locale', 'Front\LocalesController@setLocale')->name('locales.set-locale');
});