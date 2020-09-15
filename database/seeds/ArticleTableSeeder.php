<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class)->create([
            'title' => 'Vega CMS Documentation site',
            'sub_title' => '',
            'content' => 'An usage guide is now available.',
        ]);
    }
}
