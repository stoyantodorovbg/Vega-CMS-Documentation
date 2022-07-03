@extends('front.layouts.app')

@section('content')
    <div class="container-fluid documentation-pages">
        <div class="row">
            <div class="col-lg-2 documentation-home-sidebar sticky-top">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-lg-10 content">
                <div class="container">
                  <div class="documentation-home-main-nav">
                      <dynamic-menu :menu_id="4"></dynamic-menu>
                  </div>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">Routing</h3>
                        </div>
                        <div class="card-body">
                          <p>Vega CMS offers an automated process to create routes.
                              Route Service adds routes to separate files. It is not recommended to write code manually into them.
                              The routes data is stored in DB.
                              <a href="{{ route('documentation-localization') }}" >Localization</a> and
                              <a href="{{ route('documentation-authorization') }}" >authorization</a> functionalities use this data.</p>
                          <p>There are three ways to add a route:</p>
                          <h2>Create Route via Administration.</h2>
                          <p>The form accepts data in a format like this:</p>
                          <img src="{{ asset('storage/documentation-screenshots/routes/admin-create-route.png') }}"
                               alt="admin-create-route" class="w-75"
                          >
                          <h2>Create Route via console</h2>
                          <p>This line creates an exemplary route:</p>
                          <p><code class="command">
                                  php artisan generate:route /example-route get ExampleController@index front.example-route vega-web front \App\Http\Controllers\\
                              </code></p>
                          <p>Last three parameters are optional.</p>
                          <h2 id="create-route-through-db-seeder">Create Route via DB seeder</h2>
                          <p>The seeder could looks like that:</p>
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
                          <h2>URL Prefix</h2>
                          <p>The way to add a prefix to all routes is described in
                              <a href="{{ route('documentation-localization') }}">localization</a> section.</p>
                          <h2>Authorization</h2>
                          <p class="mb-5 pb-5">It's provided through middlewares. For more information see the
                              <a href="{{ route('documentation-authorization') }}">authorization</a> section.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
