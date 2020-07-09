<?php

use Vegacms\Cms\Models\Menu;
use Illuminate\Database\Seeder;
use Vegacms\Cms\Models\MenuItem;

class DocumentationSideMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menu ID 3
        if($menu = Menu::find(3)) {
            $menu->delete();
            MenuItem::where('menu_id', 3)->delete();
        }
        // Documentation Side Navigation
        $menu = factory(Menu::class)->create([
            'title' => json_encode([
                'text' => 'Vegacms CMS - Documentation Side Menu',
                'status' => 0,
                'classes' => 'nav-title',
                'styles' => [],
                'structure' => [
                    'text' => ['type' => 'text'],
                    'status' => ['type' => 'text'],
                    'classes' => ['type' => 'text'],
                    'styles' => ['type' => 'json', 'nested' => []],
                ],
            ]),
            'description' => json_encode([
                'text' => 'Main menu',
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
            'status' => 1,
            'classes' => 'documentation-side-nav',
            'styles' => json_encode([]),
        ]);

        $menu->id = 3;
        $menu->save();

        // Documentation main navigation - menu items
        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/requirements',
            'title' => json_encode([
                'text' => 'Requirements',
                'status' => 1,
                'classes' => '',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        // Documentation main navigation - menu items
        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/getting-started',
            'title' => json_encode([
                'text' => 'Getting Started',
                'status' => 1,
                'classes' => '',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/localization',
            'title' => json_encode([
                'text' => 'Localization',
                'status' => 1,
                'classes' => '',
                'styles',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/routing',
            'title' => json_encode([
                'text' => 'Routing',
                'status' => 1,
                'classes' => '',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/authorization',
            'title' => json_encode([
                'text' => 'Authorization',
                'status' => 1,
                'classes' => '',
                'styles',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/translations',
            'title' => json_encode([
                'text' => 'Translations',
                'status' => 1,
                'classes' => '',
                'styles',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/menus',
            'title' => json_encode([
                'text' => 'Menus',
                'status' => 1,
                'classes' => '',
                'styles',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/pages',
            'title' => json_encode([
                'text' => 'Pages',
                'status' => 1,
                'classes' => '',
                'styles',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);

        factory(MenuItem::class)->create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'status' => 1,
            'url' => '/testing',
            'title' => json_encode([
                'text' => 'Testing',
                'status' => 1,
                'classes' => '',
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
            'prefix' => 'front',
            'classes' => '',
            'styles' => json_encode([]),
        ]);
    }
}
