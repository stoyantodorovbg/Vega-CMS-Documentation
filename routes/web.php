<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix(app()->getLocale())
    ->middleware(['locale', 'web', 'bindings'])
    ->namespace('\Vegacms\Cms\Http\Controllers')
    ->group(function () {
        Auth::routes();
        Route::post('/set-locale', 'Front\LocalesController@setLocale')->name('locales.set-locale');
    });

Route::prefix(app()->getLocale())
    ->middleware(['locale', 'web', 'bindings'])
    ->group(function () {
    Route::get('/', 'Front\HomeController@index')->name('main-home');
    Route::get('/documentation', 'Front\DocumentationController@home')->name('documentation-home');
    Route::get('/home', 'Front\HomeController@index')->name('home')->middleware('ordinaryUsers');
});
