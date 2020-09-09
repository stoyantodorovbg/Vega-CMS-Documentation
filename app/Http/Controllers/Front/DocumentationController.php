<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class DocumentationController extends Controller
{
    /**
     * Documentation home page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('front.documentation.home');
    }

    /**
     * Documentation requirements page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function requirements()
    {
        return view('front.documentation.requirements');
    }

    /**
     * Documentation gettingStarted page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gettingStarted()
    {
        return view('front.documentation.getting-started');
    }

    /**
     * Documentation localization page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function localization()
    {
        return view('front.documentation.localization');
    }

    /**
     * Documentation routing page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function routing()
    {
        return view('front.documentation.routing');
    }

    /**
     * Documentation authorization page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function authorization()
    {
        return view('front.documentation.authorization');
    }

    /**
     * Documentation translations page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function translations()
    {
        return view('front.documentation.translations');
    }

    /**
     * Documentation menus page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function menus()
    {
        return view('front.documentation.menus');
    }

    /**
     * Documentation pages page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pages()
    {
        return view('front.documentation.pages');
    }

    /**
     * Documentation testing page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function testing()
    {
        return view('front.documentation.testing');
    }

    /**
     * Documentation utilities page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function utilities()
    {
        return view('front.documentation.utilities');
    }
}
