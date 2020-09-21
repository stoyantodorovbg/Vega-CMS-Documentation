<?php

namespace Database\Seeders;

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
        $this->call(ArticleTableSeeder::class);
        $this->call(PhraseButtonsTableSeeder::class);
        $this->call(PhraseLabelsTableSeeder::class);
        $this->call(AdminSideMenuSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}
