<?php

/*
|--------------------------------------------------------------------------
| Vega CMS Admin Routes
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
foreach (config('cms.locales.codes') as $code) {
    Route::prefix($code)
        ->middleware(['locale'])
        ->group(function () {

            Route::get('/dashboard', '\Vegacms\Cms\Http\Controllers\Admin\DashboardsController@index')->name('admin-dashboards.index')->middleware('admins');

            Route::get('/', '\Vegacms\Cms\Http\Controllers\Admin\DashboardsController@home')->name('admin-dashboards.home')->middleware('admins');

            Route::get('/groups', '\Vegacms\Cms\Http\Controllers\Admin\GroupsController@index')->name('admin-groups.index')->middleware('admins');

            Route::get('/groups/create', '\Vegacms\Cms\Http\Controllers\Admin\GroupsController@create')->name('admin-groups.create')->middleware('admins');

            Route::get('/groups/{group}', '\Vegacms\Cms\Http\Controllers\Admin\GroupsController@show')->name('admin-groups.show')->middleware('admins');

            Route::post('/groups/store', '\Vegacms\Cms\Http\Controllers\Admin\GroupsController@store')->name('admin-groups.store')->middleware('admins');

            Route::get('/users', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@index')->name('admin-users.index')->middleware('admins');

            Route::get('/users/create', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@create')->name('admin-users.create')->middleware('admins');

            Route::get('/users/{user}', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@show')->name('admin-users.show')->middleware('admins');

            Route::post('/users/store', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@store')->name('admin-users.store')->middleware('admins');

            Route::get('/users/{user}/edit', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@edit')->name('admin-users.edit')->middleware('admins');

            Route::patch('/users/{user}/update', '\Vegacms\Cms\Http\Controllers\Admin\UsersController@update')->name('admin-users.update')->middleware('admins');

            Route::get('/phrases', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@index')->name('admin-phrases.index')->middleware('admins');

            Route::get('/phrases/create', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@create')->name('admin-phrases.create')->middleware('admins');

            Route::get('/phrases/{phrase}', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@show')->name('admin-phrases.show')->middleware('admins');

            Route::post('/phrases/store', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@store')->name('admin-phrases.store')->middleware('admins');

            Route::get('/phrases/{phrase}/edit', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@edit')->name('admin-phrases.edit')->middleware('admins');

            Route::patch('/phrases/{phrase}/update', '\Vegacms\Cms\Http\Controllers\Admin\PhrasesController@update')->name('admin-phrases.update')->middleware('admins');

            Route::get('/locales', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@index')->name('admin-locales.index')->middleware('admins');

            Route::get('/locales/create', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@create')->name('admin-locales.create')->middleware('admins');

            Route::get('/locales/{locale}', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@show')->name('admin-locales.show')->middleware('admins');

            Route::post('/locales/store', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@store')->name('admin-locales.store')->middleware('admins');

            Route::get('/locales/{locale}/edit', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@edit')->name('admin-locales.edit')->middleware('admins');

            Route::patch('/locales/{locale}/update', '\Vegacms\Cms\Http\Controllers\Admin\LocalesController@update')->name('admin-locales.update')->middleware('admins');

            Route::get('/routes', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@index')->name('admin-routes.index')->middleware('admins');

            Route::get('/routes/create', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@create')->name('admin-routes.create')->middleware('admins');

            Route::get('/routes/{route}', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@show')->name('admin-routes.show')->middleware('admins');

            Route::post('/routes/store', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@store')->name('admin-routes.store')->middleware('admins');

            Route::get('/routes/{route}/edit', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@edit')->name('admin-routes.edit')->middleware('admins');

            Route::patch('/routes/{route}/update', '\Vegacms\Cms\Http\Controllers\Admin\RoutesController@update')->name('admin-routes.update')->middleware('admins');

            Route::get('/menus', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@index')->name('admin-menus.index')->middleware('admins');

            Route::get('/menus/create', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@create')->name('admin-menus.create')->middleware('admins');

            Route::get('/menus/{menu}', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@show')->name('admin-menus.show')->middleware('admins');

            Route::post('/menus/store', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@store')->name('admin-menus.store')->middleware('admins');

            Route::get('/menus/{menu}/edit', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@edit')->name('admin-menus.edit')->middleware('admins');

            Route::patch('/menus/{menu}/update', '\Vegacms\Cms\Http\Controllers\Admin\MenusController@update')->name('admin-menus.update')->middleware('admins');

            Route::get('/menu-items/create', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@create')->name('admin-menu-items.create')->middleware('admins');

            Route::get('/menu-items/index/{menu}/{menuItem}', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@index')->name('admin-menu-items.index')->middleware('admins');

            Route::get('/menu-items/{menuItem}', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@show')->name('admin-menu-items.show')->middleware('admins');

            Route::post('/menu-items/store', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@store')->name('admin-menu-items.store')->middleware('admins');

            Route::get('/menu-items/{menuItem}/edit', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@edit')->name('admin-menu-items.edit')->middleware('admins');

            Route::patch('/menu-items/{menuItem}/update', '\Vegacms\Cms\Http\Controllers\Admin\MenuItemsController@update')->name('admin-menu-items.update')->middleware('admins');

            Route::get('/pages', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@index')->name('admin-pages.index')->middleware('admins');

            Route::get('/pages/create', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@create')->name('admin-pages.create')->middleware('admins');

            Route::get('/pages/{page}', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@show')->name('admin-pages.show')->middleware('admins');

            Route::post('/pages/store', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@store')->name('admin-pages.store')->middleware('admins');

            Route::get('/pages/{page}/edit', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@edit')->name('admin-pages.edit')->middleware('admins');

            Route::patch('/pages/{page}/update', '\Vegacms\Cms\Http\Controllers\Admin\PagesController@update')->name('admin-pages.update')->middleware('admins');

            Route::get('/containers', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@index')->name('admin-containers.index')->middleware('admins');

            Route::get('/containers/create', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@create')->name('admin-containers.create')->middleware('admins');

            Route::get('/containers/{container}', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@show')->name('admin-containers.show')->middleware('admins');

            Route::post('/containers/store', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@store')->name('admin-containers.store')->middleware('admins');

            Route::get('/containers/{container}/edit', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@edit')->name('admin-containers.edit')->middleware('admins');

            Route::patch('/containers/{container}/update', '\Vegacms\Cms\Http\Controllers\Admin\ContainersController@update')->name('admin-containers.update')->middleware('admins');

            Route::get('/index', '\Vegacms\Cms\Http\Controllers\Admin\IndexController@data')->name('admin-models.index')->middleware('admins');

            Route::delete('/destroy', '\Vegacms\Cms\Http\Controllers\Admin\DeleteController@destroy')->name('admin-models.destroy')->middleware('admins');

			Route::get('/articles', '\App\Http\Controllers\Admin\ArticlesController@index')->name('admin-articles.index')->middleware('admins');

			Route::get('/articles/create', '\App\Http\Controllers\Admin\ArticlesController@create')->name('admin-articles.create')->middleware('admins');

			Route::get('/articles/{article}', '\App\Http\Controllers\Admin\ArticlesController@show')->name('admin-articles.show')->middleware('admins');

			Route::post('/articles/store', '\App\Http\Controllers\Admin\ArticlesController@store')->name('admin-articles.store')->middleware('admins');

			Route::get('/articles/{article}/edit', '\App\Http\Controllers\Admin\ArticlesController@edit')->name('admin-articles.edit')->middleware('admins');

			Route::patch('/articles/{article}/update', '\App\Http\Controllers\Admin\ArticlesController@update')->name('admin-articles.update')->middleware('admins');

			Route::get('/contacts', '\App\Http\Controllers\Admin\ContactsController@index')->name('admin-contacts.index')->middleware('admins');

			Route::get('/contacts/create', '\App\Http\Controllers\Admin\ContactsController@create')->name('admin-contacts.create')->middleware('admins');

			Route::get('/contacts/{contact}', '\App\Http\Controllers\Admin\ContactsController@show')->name('admin-contacts.show')->middleware('admins');

			Route::post('/contacts/store', '\App\Http\Controllers\Admin\ContactsController@store')->name('admin-contacts.store')->middleware('admins');

			Route::get('/contacts/{contact}/edit', '\App\Http\Controllers\Admin\ContactsController@edit')->name('admin-contacts.edit')->middleware('admins');

			Route::patch('/contacts/{contact}/update', '\App\Http\Controllers\Admin\ContactsController@update')->name('admin-contacts.update')->middleware('admins');

			Route::get('/request-tracks', '\App\Http\Controllers\Admin\RequestTracksController@index')->name('admin-request-tracks.index')->middleware('admins');
		});
}