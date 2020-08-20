@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-pages">
        <div class="row">
            <div class="col-2 documentation-home-sidebar">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-10 content">
                <div class="row">
                    <div class="col-12">
                        <div class="documentation-home-main-nav">
                            <dynamic-menu :menu_id="4"></dynamic-menu>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mr-5 ml-5">
                        <h1>Routing</h1>
                        <p>Vega CMS provides automated process for creating routes.
                            The route is added to files, where it is not recommended to write code manually.
                            The route data is stored in DB. This make it possible to provide
                            <a href="{{ route('documentation-localization') }}" >localization</a> and
                            <a href="{{ route('documentation-authorization') }}" >authorization</a> functionality.</p>
                        <p>There are three ways to add a route:</p>
                        <h2>Create Route through Administration.</h2>
                        <p>The form receives data in a format like this:</p>
                        <img src="{{ asset('storage/documentation-screenshots/routes/admin-create-route.png') }}"
                             alt="locales-widget-language" class="w-75"
                        >
                        <h2>Create Route through the console</h2>
                        <p>This line creates an exemplary route:</p>
                        <p><code class="command">
                                php artisan generate:route /example-route get ExampleController@index front.example-route vega-web front \App\Http\Controllers\\
                            </code></p>
                        <p>Last three parameters are optional.</p>
                        <h2>Create Route through DB seeder</h2>
                        <p>It's the recommended way for those who have enough knowledge to use php code.</p>
                        <pre>
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
        // Testing pages page
        $this->createRoute('/example-route',
            'get',
            'ExampleController@index',
            'front.example-route',
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

                        </pre>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
