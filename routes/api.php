<?php

use Illuminate\Http\Request;

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
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Vega CMS API Routes
|--------------------------------------------------------------------------
|
| These routes are created from Vega CMS package.
| If you upgrade the package, make sure that there is no any code after them.
| Thus if there are new routes from the upgrade
| 'php artisan db:seed --class=RoutesTableSeeder' will adds them hire.
|
*/
foreach(config('cms.locales.codes', []) as $code) {
    Route::prefix($code)
        ->middleware(['locale'])
        ->group(function () {

        });
}
