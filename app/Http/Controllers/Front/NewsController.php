<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * News index page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.news', [
            'articles' => Article::where('status', 1)->orderBy('created_at', 'desc')->get()
        ]);
    }
}
