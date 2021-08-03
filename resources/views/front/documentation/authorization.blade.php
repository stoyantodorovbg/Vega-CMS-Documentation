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
                          <h3 class="card-title">Authorization</h3>
                      </div>
                      <div class="card-body">
                        <p>Route Service attaches middlewares to the routes. The middlewares are related to the user groups.
                            When a group is attached to a route, only group members can use it.
                        </p>
                        <h2>Create Group via Administration</h2>
                        <img src="{{ asset('storage/documentation-screenshots/groups/admin-form.png') }}"
                             alt="groups admin form" class="w-75"
                        >
                        <p class="mt-2">The title determines the class name of the created middleware.</p>
                        <h2>Create Group via Console</h2>
                        <p><code class="command">php artisan generate:group groupName groupDescription</code></p>
                        <h2>Create Group via DB seeder</h2>
                        <p>The DB seeder could looks like this:</p>
                        <pre>
                            use Vegacms\Cms\Models\Group;
                            use Illuminate\Database\Seeder;
                            use Vegacms\Cms\Services\Interfaces\GroupServiceInterface;
                            use Vegacms\Cms\Services\Interfaces\FileCreateServiceInterface;

                            class GroupsTableSeeder extends Seeder
                            {
                                /**
                                 * @var FileCreateServiceInterface
                                 */
                                protected $fileCreateService;

                                /**
                                 * @var GroupServiceInterface
                                 */
                                protected $groupService;

                                /**
                                 * GroupsTableSeeder constructor.
                                 * @param FileCreateServiceInterface $fileCreateService
                                 * @param GroupServiceInterface $groupService
                                 */
                                public function __construct(FileCreateServiceInterface $fileCreateService, GroupServiceInterface $groupService)
                                {
                                    $this->fileCreateService = $fileCreateService;
                                    $this->groupService = $groupService;
                                }


                                /**
                                 * Run the database seeds.
                                 *
                                 * @return void
                                 */
                                public function run(): void
                                {
                                    if (!$this->middlewareExists('customers')) {
                                        $this->groupService->create([
                                            'title' => 'customers',
                                            'description' => 'Customer.',
                                        ]);
                                    } else {
                                        factory(Group::class)->create([
                                            'title' => 'customers',
                                            'description' => 'Customer.',
                                        ]);
                                    }
                                }

                                /**
                                 * Check if the middleware already exists
                                 *
                                 * @param string $groupTitle
                                 * @return bool
                                 */
                                protected function middlewareExists(string $groupTitle): bool
                                {
                                    return $this->fileCreateService->fileExists(
                                        '/app/Http/Middleware/',
                                        ucfirst($groupTitle),
                                        '.php'
                                        );
                                }
                            }

                        </pre>
                        <h2>Attach/Detach Group to/from Route via Administration</h2>
                        <p>On edit route page select groups:</p>
                        <img src="{{ asset('storage/documentation-screenshots/groups/admin-attach-group-to-route.png') }}"
                             alt="attach group to route" class="w-75"
                        >
                        <h2>Attach/Detach Group to/from Route via Console</h2>
                        <p><code class="command">php artisan attach:route-to-group routeName groupTitle</code></p>
                        <p><code class="command">php artisan detach:route-from-group routeName groupTitle</code></p>
                        <h2>Attach/Detach Group to/from Route via DB seeder</h2>
                        <p class="mb-5 pb-5">It is presented on <a href="{{ route('documentation-routing') }}#create-route-through-db-seeder">routing</a> page</p>
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
