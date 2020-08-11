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
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation home page
        $this->createRoute('/documentation',
            'get',
            'DocumentationController@home',
            'documentation-home',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation getting started page
        $this->createRoute('/getting-started',
            'get',
            'DocumentationController@gettingStarted',
            'documentation-getting-started',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation localization page
        $this->createRoute('/localization',
            'get',
            'DocumentationController@localization',
            'documentation-localization',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation routing page
        $this->createRoute('/routing',
            'get',
            'DocumentationController@routing',
            'documentation-routing',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation authorization page
        $this->createRoute('/authorization',
            'get',
            'DocumentationController@authorization',
            'documentation-authorization',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation translations page
        $this->createRoute('/translations',
            'get',
            'DocumentationController@translations',
            'documentation-translations',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation menus page
        $this->createRoute('/menus',
            'get',
            'DocumentationController@menus',
            'documentation-menus',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation pages page
        $this->createRoute('/pages',
            'get',
            'DocumentationController@pages',
            'documentation-pages',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Documentation pages page
        $this->createRoute('/pages',
            'get',
            'DocumentationController@pages',
            'documentation-pages',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Testing pages page
        $this->createRoute('/testing',
            'get',
            'DocumentationController@testing',
            'documentation-testing',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
        );

        // Requirements page
        $this->createRoute('/requirements',
            'get',
            'DocumentationController@requirements',
            'documentation-requirements',
            'web',
            'front',
            '',
            '\App\Http\Controllers\Front\\'
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
