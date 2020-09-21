<?php

namespace Database\Seeders;

use Vegacms\Cms\Models\Phrase;
use Illuminate\Database\Seeder;

class PhraseLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phrase::create([
            'system_name' => 'labels.sub_title',
            'text' => [
                'en' => 'sub title'
            ]
        ]);

        Phrase::create([
            'system_name' => 'labels.content',
            'text' => [
                'en' => 'content'
            ]
        ]);
    }
}
