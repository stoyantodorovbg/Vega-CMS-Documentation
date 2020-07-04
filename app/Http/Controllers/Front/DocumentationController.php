<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class DocumentationController extends Controller
{
    public function home()
    {
        return view('front.documentation.home');
    }
}
