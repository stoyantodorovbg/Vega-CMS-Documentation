<?php

/*
|--------------------------------------------------------------------------
| Vega CMS Web Routes
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

			Route::get('/', '\App\Http\Controllers\Front\HomeController@index')->name('main-home')->middleware('trackRequest');

			Route::get('/documentation', '\App\Http\Controllers\Front\DocumentationController@home')->name('documentation-home')->middleware('trackRequest');

			Route::get('/getting-started', '\App\Http\Controllers\Front\DocumentationController@gettingStarted')->name('documentation-getting-started')->middleware('trackRequest');

			Route::get('/localization', '\App\Http\Controllers\Front\DocumentationController@localization')->name('documentation-localization')->middleware('trackRequest');

			Route::get('/routing', '\App\Http\Controllers\Front\DocumentationController@routing')->name('documentation-routing')->middleware('trackRequest');

			Route::get('/authorization', '\App\Http\Controllers\Front\DocumentationController@authorization')->name('documentation-authorization')->middleware('trackRequest');

			Route::get('/translations', '\App\Http\Controllers\Front\DocumentationController@translations')->name('documentation-translations')->middleware('trackRequest');

			Route::get('/menus', '\App\Http\Controllers\Front\DocumentationController@menus')->name('documentation-menus')->middleware('trackRequest');

			Route::get('/pages', '\App\Http\Controllers\Front\DocumentationController@pages')->name('documentation-pages')->middleware('trackRequest');

			Route::get('/testing', '\App\Http\Controllers\Front\DocumentationController@testing')->name('documentation-testing')->middleware('trackRequest');

			Route::get('/requirements', '\App\Http\Controllers\Front\DocumentationController@requirements')->name('documentation-requirements')->middleware('trackRequest');

			Route::get('/useful-functionalities', '\App\Http\Controllers\Front\DocumentationController@usefulFunctionalities')->name('documentation-useful-functionalities')->middleware('trackRequest');

			Route::get('/utilities', '\App\Http\Controllers\Front\DocumentationController@utilities')->name('documentation-utilities')->middleware('trackRequest');

			Route::get('/news', '\App\Http\Controllers\Front\NewsController@index')->name('main-news')->middleware('trackRequest');

			Route::get('/about', '\App\Http\Controllers\Front\AboutController@index')->name('main-about')->middleware('trackRequest');

			Route::get('/contacts', '\App\Http\Controllers\Front\ContactsController@index')->name('main-contacts')->middleware('trackRequest');

			Route::post('/contacts/store', '\App\Http\Controllers\Front\ContactsController@store')->name('front-contacts.store')->middleware('trackRequest');
		});
}
