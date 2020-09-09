<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Contacts index page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.contacts');
    }
}
