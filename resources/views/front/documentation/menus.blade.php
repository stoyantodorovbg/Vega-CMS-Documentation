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
                            <h3 class="card-title">Menus</h3>
                        </div>
                        <div class="card-body">
                          <p>Vega CMS renders menus from DB.
                              Menu data could be managed via Administration or DB seeder.</p>
                          <h2>Manage Menu data from Administration</h2>
                          <h3>Manage menu elements</h3>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-admin-form.png') }}"
                               alt="menu admin form" class="w-75"
                          >
                          <p class="mt-3">The data from this form renders such menu:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-html.png') }}"
                               alt="menu HTML" class="w-25"
                          >
                          <p class="mt-3">When title and description are activated the HTML looks like this:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-html-active-title-description.png') }}"
                               alt="menu that has active title description" class="w-25"
                          >
                          <p class="mt-3">Styles could be added to the main menu container easily. First define the key:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-style-define-key.png') }}"
                               alt="menu style define key" class="w-50"
                          >
                          <p class="mt-3">Second add value:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-style-add-value.png') }}"
                               alt="menu style add value" class="w-50"
                          >
                          <p class="mt-3">The result is:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-added-style.png') }}"
                               alt="menu added style" class="w-50"
                          >
                          <p class="mt-3">In the same way styles could be added to menu title and description.</p>
                          <h3>Manage menu items</h3>
                          <p>At the bottom of the page there is a link to menu items which are assigned to the menu.</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/menu-link-menu-items.png') }}"
                               alt="menu link menu items" class="w-75"
                          >
                          <p class="mt-3">A menu item could be created through a form:</p>
                          <img src="{{ asset('storage/documentation-screenshots/menus/create-menu-item-form.png') }}"
                               alt="create menu item form" class="w-75"
                          >
                          <p class="mt-3">Select a menu to which to add the menu item.</p>
                          <p>When the selected menu have other menu items you could add the new one to an already existing.
                               In this way the menu items are grouped in a tree structure.</p>
                          <p>URL field determines the page to which the menu item leads.</p>
                          <p>When the URL is for Administration section select the relevant prefix.</p>
                          <p>Only menu items with active statuses are displayed.</p>
                          <p>Also HTML classes could be added.</p>
                          <p>Title, description and styles could be managed in the same way.</p>

                          <h2>Manage Menu data via DB seeder</h2>
                          <p>This is a way to add a menu and menu items through DB seeder:</p>
                          <pre>
                              use Vegacms\Cms\Models\Menu;
                              use Vegacms\Cms\Models\MenuItem;
                              use Illuminate\Database\Seeder;

                              class MenuTableSeeder extends Seeder
                              {
                                  /**
                                   * Run the database seeds.
                                   *
                                   * @return void
                                   */
                                  public function run()
                                  {
                                      // Menu
                                      $menu = factory(Menu::class)->create([
                                          'title' => json_encode([
                                              'text' => 'Side Admin Menu',
                                              'status' => 0,
                                              'classes' => 'nav-title',
                                              'styles' => [],
                                              'structure' => [
                                                  'text' => ['type' => 'text'],
                                                  'status' => ['type' => 'text'],
                                                  'classes' => ['type' => 'text'],
                                                  'styles' => ['type' => 'json','nested' => []],
                                              ],
                                          ]),
                                          'description' => json_encode([
                                              'text' => 'Right side navigation for the administration.',
                                              'status' => 0,
                                              'classes' => 'admin-side-nav d-inline-flex p-3 pl-4 col-2',
                                              'styles' => [],
                                              'structure' => [
                                                  'text' => ['type' => 'text'],
                                                  'status' => ['type' => 'text'],
                                                  'classes' => ['type' => 'text'],
                                                  'styles' => ['type' => 'json','nested' => []],
                                              ],
                                          ]),
                                          'status' => 1,
                                          'classes' => 'admin-side-nav',
                                          'styles' => json_encode([]),
                                      ]);

                                      // Menu items
                                      factory(MenuItem::class)->create([
                                          'menu_id' => $menu->id,
                                          'parent_id' => null,
                                          'status' => 1,
                                          'url' => 'dashboard',
                                          'title' => json_encode([
                                              'text' => 'Dashboard',
                                              'status' => 1,
                                              'classes' => 'icon i-dashboard nav-item-text--light',
                                              'styles' => [],
                                              'structure' => [
                                                  'text' => ['type' => 'text'],
                                                  'status' => ['type' => 'text'],
                                                  'classes' => ['type' => 'text'],
                                                  'styles' => ['type' => 'json', 'nested' => []],
                                              ],
                                          ]),
                                          'description' => json_encode([
                                              'text' => '',
                                              'status' => 0,
                                              'classes' => '',
                                              'styles' => [],
                                              'structure' => [
                                                  'text' => ['type' => 'text'],
                                                  'status' => ['type' => 'text'],
                                                  'classes' => ['type' => 'text'],
                                                  'styles' => ['type' => 'json', 'nested' => []],
                                              ],
                                          ]),
                                          'prefix' => 'admin',
                                          'classes' => 'nav-item',
                                          'styles' => json_encode([]),
                                      ]);
                                  }
                              }

                          </pre>
                          <h2>Front-end widget</h2>
                          <p>This code renders the menu:</p>
                          <pre>
                            {{ '<dynamic-menu :menu_id="1"></dynamic-menu>' }}
                          </pre>
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
