<?php

use Vegacms\Cms\Models\Group;
use Vegacms\Cms\Models\Route;
use Illuminate\Database\Seeder;
use Vegacms\Cms\Services\Interfaces\RouteServiceInterface;

class RouteTableSeeder extends Seeder
{
    /**
     * @var RouteServiceInterface
     */
    protected $routeService;

    /**
     * GroupsTableSeeder constructor.
     * @param RouteServiceInterface $routeService
     */
    public function __construct(RouteServiceInterface $routeService)
    {
        $this->routeService = $routeService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Main home page
        $this->createRoute('/',
            'get',
            'HomeController@index',
            'main-home',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Main news page
        $this->createRoute('/news',
            'get',
            'NewsController@index',
            'main-news',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Main about page
        $this->createRoute('/about',
            'get',
            'AboutController@index',
            'main-about',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation home page
        $this->createRoute('/documentation',
            'get',
            'DocumentationController@home',
            'documentation-home',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation getting started page
        $this->createRoute('/getting-started',
            'get',
            'DocumentationController@gettingStarted',
            'documentation-getting-started',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation localization page
        $this->createRoute('/localization',
            'get',
            'DocumentationController@localization',
            'documentation-localization',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation routing page
        $this->createRoute('/routing',
            'get',
            'DocumentationController@routing',
            'documentation-routing',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation authorization page
        $this->createRoute('/authorization',
            'get',
            'DocumentationController@authorization',
            'documentation-authorization',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation translations page
        $this->createRoute('/translations',
            'get',
            'DocumentationController@translations',
            'documentation-translations',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation menus page
        $this->createRoute('/menus',
            'get',
            'DocumentationController@menus',
            'documentation-menus',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation pages page
        $this->createRoute('/pages',
            'get',
            'DocumentationController@pages',
            'documentation-pages',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Documentation pages page
        $this->createRoute('/pages',
            'get',
            'DocumentationController@pages',
            'documentation-pages',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Testing pages page
        $this->createRoute('/testing',
            'get',
            'DocumentationController@testing',
            'documentation-testing',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Requirements page
        $this->createRoute('/requirements',
            'get',
            'DocumentationController@requirements',
            'documentation-requirements',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Utilities page
        $this->createRoute('/utilities',
            'get',
            'DocumentationController@utilities',
            'documentation-utilities',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Admin articles index
        $this->createRoute('/articles',
            'get',
            'ArticlesController@index',
            'admin-articles.index',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin articles create
        $this->createRoute('/articles/create',
            'get',
            'ArticlesController@create',
            'admin-articles.create',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin articles show
        $this->createRoute('/articles/{article}',
            'get',
            'ArticlesController@show',
            'admin-articles.show',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin articles store
        $this->createRoute('/articles/store',
            'post',
            'ArticlesController@store',
            'admin-articles.store',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin articles edit
        $this->createRoute('/articles/{article}/edit',
            'get',
            'ArticlesController@edit',
            'admin-articles.edit',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin articles update
        $this->createRoute('/articles/{article}/update',
            'patch',
            'ArticlesController@update',
            'admin-articles.update',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts index
        $this->createRoute('/contacts',
            'get',
            'ContactsController@index',
            'admin-contacts.index',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts create
        $this->createRoute('/contacts/create',
            'get',
            'ContactsController@create',
            'admin-contacts.create',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts show
        $this->createRoute('/contacts/{contact}',
            'get',
            'ContactsController@show',
            'admin-contacts.show',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts store
        $this->createRoute('/contacts/store',
            'post',
            'ContactsController@store',
            'admin-contacts.store',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts edit
        $this->createRoute('/contacts/{contact}/edit',
            'get',
            'ContactsController@edit',
            'admin-contacts.edit',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Admin contacts update
        $this->createRoute('/contacts/{contact}/update',
            'patch',
            'ContactsController@update',
            'admin-contacts.update',
            'admin',
            'admin',
            'admins',
            '\App\Http\Controllers\\'
        );

        // Main contacts page
        $this->createRoute('/contacts',
            'get',
            'ContactsController@index',
            'main-contacts',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );

        // Front contacts store
        $this->createRoute('/contacts/store',
            'post',
            'ContactsController@store',
            'front-contacts.store',
            'vega-web',
            'front',
            '',
            '\App\Http\Controllers\\'
        );
    }

    /**
     * Create a route
     *
     * @param string $url
     * @param string $method
     * @param string $action
     * @param string $name
     * @param string $routeType
     * @param string $actionType
     * @param string $groupName
     * @param string $controllerNamespace
     */
    protected function createRoute(string $url,
                                   string $method,
                                   string $action,
                                   string $name,
                                   string $routeType,
                                   string $actionType,
                                   string $groupName = '',
                                   string $controllerNamespace = ''
    ): void {
        if(!Route::where('name', $name)->first()) {
            $routes = $this->routeService->getRoutes();
            if (! $this->routeService->checkForExistingRoute($routes, $name)) {
                $this->routeService->create([
                    'url' => $url,
                    'method' => $method,
                    'action' => $action,
                    'name' => $name,
                    'route_type' => $routeType,
                    'action_type' => $actionType,
                    'controller_namespace' => $controllerNamespace,
                ]);

                if($groupName) {
                    $this->routeService->attachRouteToGroup([
                        'name' => $name,
                        'title' => $groupName,
                    ]);
                }
            } else {
                $route = factory(Route::class)->create([
                    'url' => $url,
                    'method' => $method,
                    'action' => $action,
                    'name' => $name,
                ]);

                if ($groupName) {
                    Group::where('title', $groupName)->first()->routes()->attach($route->id);
                }
            }
        }
    }
}
