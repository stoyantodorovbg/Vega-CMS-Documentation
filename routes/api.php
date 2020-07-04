<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::get('/admin/index', 'Api\Admin\\IndexController@data')->name('api-admin.index')->middleware('admins');
    Route::delete('/admin/destroy', 'Api\Admin\\DeleteController@destroy')->name('api-admin.destroy')->middleware('admins');
    Route::get('/menu', 'Api\MenuController@getData')->name('api.menu-data');
    Route::get('/derived-input-data', 'Api\DerivedDataController@getModelsData')->name('api.derived-input-data');
});
