<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Vegacms\Cms\Models\Phrase;

class PhraseButtonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phrase::create([
            'system_name' => 'buttons.show_article',
            'text' => [
                'en' => 'show article'
            ]
        ]);

        Phrase::create([
            'system_name' => 'buttons.edit_article',
            'text' => [
                'en' => 'edit article'
            ]
        ]);

        Phrase::create([
            'system_name' => 'buttons.all_articles',
            'text' => [
                'en' => 'all articles'
            ]
        ]);

        Phrase::create([
            'system_name' => 'buttons.edit_contact',
            'text' => [
                'en' => 'edit contact'
            ]
        ]);

        Phrase::create([
            'system_name' => 'buttons.all_contacts',
            'text' => [
                'en' => 'all contacts'
            ]
        ]);

        Phrase::create([
            'system_name' => 'buttons.show_contact',
            'text' => [
                'en' => 'show contact'
            ]
        ]);
    }
}
