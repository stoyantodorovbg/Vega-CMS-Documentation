<?php

use Vegacms\Cms\Models\Menu;
use Illuminate\Database\Seeder;
use Vegacms\Cms\Models\MenuItem;

class DocumentationMainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menu ID 4
        if($menu = Menu::find(4)) {
            $menu->delete();
            MenuItem::where('menu_id', 4)->delete();
        }
        // Main navigation - home
        $menu = factory(Menu::class)->create([
            'title' => json_encode([
                'text' => 'Vegacms CMS - Ducumentation Main Menu',
                'status' => 0,
                'classes' => 'nav-title',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => 'Documentation Main menu',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'status' => 1,
            'classes' => 'navbar documentation-main-nav',
            'styles' => json_encode([]),
        ]);

        $menu->id = 4;
        $menu->save();

        // Documentation main navigation - menu items
        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '',
            'title' => json_encode([
                'text' => 'Home',
                'status' => 1,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => '',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'prefix' => 'front',
            'classes' => 'nav-item',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => 'documentation',
            'title' => json_encode([
                'text' => 'Documentation',
                'status' => 1,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => '',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'prefix' => 'front',
            'classes' => 'nav-item',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => 'news',
            'title' => json_encode([
                'text' => 'News',
                'status' => 1,
                'classes' => '',
                'styles',
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => '',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'prefix' => 'front',
            'classes' => 'nav-item',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => 'about',
            'title' => json_encode([
                'text' => 'About',
                'status' => 1,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => '',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'classes' => 'nav-item',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => 'contacts',
            'title' => json_encode([
                'text' => 'Contacts',
                'status' => 1,
                'classes' => '',
                'styles',
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'description' => json_encode([
                'text' => '',
                'status' => 0,
                'classes' => '',
                'styles' => [],
                'structure' => [
                    'text' => [
                        'type' => 'text'
                    ],
                    'status' => [
                        'type' => 'text'
                    ],
                    'classes' => [
                        'type' => 'text'
                    ],
                    'styles' => [
                        'type' => 'json',
                        'nested' => [],
                    ],
                ],
            ]),
            'prefix' => 'front',
            'classes' => 'nav-item',
            'styles' => json_encode([]),
        ]);
    }
}
