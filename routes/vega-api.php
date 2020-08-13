<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Vega CMS API Routes
|--------------------------------------------------------------------------
|
| Use command line to crate routes.
| It is preferable not to add code manually here.
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
