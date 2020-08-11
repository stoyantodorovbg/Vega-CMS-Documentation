<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Use command line to crate routes.
|
*/


/*
|--------------------------------------------------------------------------
| Vega CMS Web Routes
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
        ->middleware(['locale', 'web'])
        ->namespace('\Vegacms\Cms\Http\Controllers')
        ->group(function () {
            Auth::routes();
        });

    Route::prefix($code)
        ->middleware(['locale', 'web'])
        ->group(function () {
            if (app()->env === 'testing') {
                Route::get('/test-test', '\Vegacms\Cms\Http\Controllers\Front\TestsController@testTest')->name('test.route');
            }

            Route::get('/home', '\Vegacms\Cms\Http\Controllers\Front\VegaCmsHomeController@index')->name('home')->middleware('ordinaryUsers');

            Route::get('/menu-data', '\Vegacms\Cms\Http\Controllers\Front\MenuController@getData')->name('menus.menu-data');

            Route::get('/derived-input-data', '\Vegacms\Cms\Http\Controllers\Front\DerivedDataController@getModelsData')->name('inputs.derived-input-data');

            Route::get('/get-active-locales', '\Vegacms\Cms\Http\Controllers\Front\LocalesController@getActiveLocales')->name('locales.get-active-locales');

            Route::post('/set-locale', '\Vegacms\Cms\Http\Controllers\Front\LocalesController@setLocale')->name('locales.set-locale');

            Route::get('/', 'Front\HomeController@index')->name('main-home');

            Route::get('/documentation', 'Front\DocumentationController@home')->name('documentation-home');

            Route::get('/getting-started', 'Front\DocumentationController@gettingStarted')->name('documentation-getting-started');

            Route::get('/localization', 'Front\DocumentationController@localization')->name('documentation-localization');

            Route::get('/routing', 'Front\DocumentationController@routing')->name('documentation-routing');

            Route::get('/authorization', 'Front\DocumentationController@authorization')->name('documentation-authorization');

            Route::get('/translations', 'Front\DocumentationController@translations')->name('documentation-translations');

            Route::get('/menus', 'Front\DocumentationController@menus')->name('documentation-menus');

            Route::get('/pages', 'Front\DocumentationController@pages')->name('documentation-pages');

            Route::get('/testing', 'Front\DocumentationController@testing')->name('documentation-testing');

            Route::get('/requirements', 'Front\DocumentationController@requirements')->name('documentation-requirements');
	});
}
