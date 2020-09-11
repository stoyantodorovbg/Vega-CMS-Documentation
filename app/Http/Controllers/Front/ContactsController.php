<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;

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

    /**
     * Contacts store
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());

        return back()->with('status', 'Message sent.');
    }
}
