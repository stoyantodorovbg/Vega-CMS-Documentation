<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Requests\Admin\ContactRequest;

class ContactsController
{
    /**
     * Admin contacts index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.contacts.index');
    }

    /**
     * Admin contacts show page
     *
     * @param Contact $contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Admin contacts create page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Admin contacts store action
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return redirect()->route('admin-contacts.show', $contact->getSlug())->with(compact('contact'));
    }

    /**
     * Admin contacts edit page
     *
     * @param Contact $contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Admin contacts update action
     *
     * @param Contact $contact
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Contact $contact, ContactRequest $request)
    {
        $contact->update($request->validated());

        return redirect()->back()->with(compact('contact'));
    }
}
