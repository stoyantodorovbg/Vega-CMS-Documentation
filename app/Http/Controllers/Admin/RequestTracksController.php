<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RequestTracksController extends Controller
{
    /**
     * Admin request tracks index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.request-tracks.index');
    }
}
