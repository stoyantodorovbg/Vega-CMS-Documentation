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
            'front'
        );

        // Documentation home page
        $this->createRoute('/documentation',
            'get',
            'DocumentationController@home',
            'documentation-home',
            'web',
            'front'
        );

        // Documentation home page
        $this->createRoute('/documentation',
            'get',
            'DocumentationController@home',
            'documentation-home',
            'web',
            'front'
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
     */
    protected function createRoute(string $url,
                                   string $method,
                                   string $action,
                                   string $name,
                                   string $routeType,
                                   string $actionType,
                                   string $groupName = ''
    ): void {
        $routes = $this->routeService->getRoutes();
        if (! $this->routeService->checkForExistingRoute($routes, $name)) {
            $this->routeService->create([
                'url' => $url,
                'method' => $method,
                'action' => $action,
                'name' => $name,
                'route_type' => $routeType,
                'action_type' => $actionType,
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
