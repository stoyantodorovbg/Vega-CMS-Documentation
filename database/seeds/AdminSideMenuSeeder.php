<?php

use Illuminate\Database\Seeder;
use Vegacms\Cms\Models\MenuItem;

class AdminSideMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sidebar navigation - admin panel - menu items
        factory(MenuItem::class)->create([
            'menu_id' => 1,
            'parent_id' => null,
            'status' => 1,
            'url' => 'articles',
            'title' => json_encode([
                'text' => 'Articles',
                'status' => 1,
                'classes' => 'icon i-page nav-item-text--light',
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
