<?php

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
            'system_name' => 'labels.show_article',
            'text' => [
                'en' => 'show article'
            ]
        ]);

        Phrase::create([
            'system_name' => 'labels.edit_article',
            'text' => [
                'en' => 'edit article'
            ]
        ]);

        Phrase::create([
            'system_name' => 'labels.all_articles',
            'text' => [
                'en' => 'all articles'
            ]
        ]);
    }
}
