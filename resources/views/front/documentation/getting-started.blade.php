@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-pages">
        <div class="row">
            <div class="col-2 documentation-home-sidebar">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-10 content">
                <div class="row">
                    <div class="col-12">
                        <div class="documentation-home-main-nav">
                            <dynamic-menu :menu_id="4"></dynamic-menu>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1>Getting Started</h1>
                        <h2>Installation:</h2>
                        <p>Vega CMS is made to integrate with Laravel.</p>
                        <p class="mt-5 pt-3">After installing Laravel 7.0 or newer version run in the console</p>
                        <p><code class="command">composer require vegacms/cms</code></p>
                        <p>in order to install Vega CMS on your project. </p>
                        <p class="mt-5 pt-3"><code class="command">php artisan integrate:vegacms-cms</code></p>
                        <p>creates some route files, migrates database, publishes JS and SCSS assets, installs front-end
                            dependencies and runs npm watcher.
                        </p>
                        <p class="mt-5 pt-3"><code class="command">php artisan db:seed</code></p>
                        <p>runs database seeders. Don't forget to change the users passwords before uploading your
                            project on live server.</p>
                        <p class="mt-5 pt-5">
                            Vega CMS is accessible in the browser on <span class="url-text">{your host}/en/login</span>
                        </p>
                        <p>
                            There are three default users:
                            <span class="email">admin@example.com</span>,
                            <span class="email">moderator@example.com</span>,
                            <span class="email">user@example.com</span>
                            with password <span class="password">secret</span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
