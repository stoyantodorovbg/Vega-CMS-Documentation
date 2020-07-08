<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(RouteTableSeeder::class);
        $this->call(HomeMainMenuSeeder::class);
        $this->call(DocumentationSideMenuSeeder::class);
        $this->call(DocumentationMainMenuSeeder::class);
    }
}
