@extends('front.layouts.app')

@section('content')
    <div class="container-fluid documentation-pages">
        <div class="row">
            <div class="col-lg-2 documentation-home-sidebar sticky-top">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-lg-10 content">
                <div class="container">
                  <div class="documentation-home-main-nav">
                      <dynamic-menu :menu_id="4"></dynamic-menu>
                  </div>
                </div>
<<<<<<< HEAD
                <div class="container">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">Getting Started</h3>
                        </div>
                        <div class="card-body">
                            <h2>Installation:</h2>
                            <p>Vega CMS is made to integrate with Laravel.</p>
                            <p class="mt-5 pt-3">It can be added to Laravel project through:</p>
                            <p><code class="command">composer require vegacms/cms</code></p>
                            <p class="mt-5">Next command creates some route files, migrates database, publishes JS and SCSS assets, installs front-end
                                dependencies and runs npm watcher.
                            </p>
                            <p><code class="command">php artisan integrate:vegacms-cms</code></p>
                            <p class="mt-5">Vega CMS seeders are executed through the standard command. Don't forget to change the users passwords before uploading your
                                project on live server.</p>
                            <p><code class="command">php artisan db:seed</code></p>
                            <p class="mt-5">
                                Vega CMS is accessible in the browser on <span class="url-text font-weight-bold">{your host}/en/login</span>.
                            </p>
                            <p class="mb-5 pb-5">
                                There are three default users:
                                <span class="email">admin@example.com</span>,
                                <span class="email">moderator@example.com</span>,
                                <span class="email">user@example.com</span>
                                with password <span class="password">secret</span>.
                            </p>
                        </div>
=======
                <div class="row">
                    <div class="col-12">
                        <h1>Getting Started</h1>
                        <h2>Installation:</h2>
                        <p>Vega CMS PHP Package is made to integrate with Laravel.</p>
                        <p class="mt-5 pt-3">It can be added to Laravel project through:</p>
                        <p><code class="command">composer require vegacms/cms</code></p>
                        <p class="mt-5">Next command creates some route files, migrates database, publishes JS and SCSS assets, installs front-end
                            dependencies and runs npm watcher.
                        </p>
                        <p><code class="command">php artisan integrate:vegacms-cms</code></p>
                        <p class="mt-5">Vega CMS seeders are executed through the standard command. Don't forget to change the users passwords before uploading your
                            project on live server.</p>
                        <p><code class="command">php artisan db:seed</code></p>
                        <p class="mt-5">
                            Vega CMS is accessible in the browser on <span class="url-text font-weight-bold">{your host}/en/login</span>.
                        </p>
                        <p class="mb-5 pb-5">
                            There are three default users:
                            <span class="email">admin@example.com</span>,
                            <span class="email">moderator@example.com</span>,
                            <span class="email">user@example.com</span>
                            with password <span class="password">secret</span>.
                        </p>
>>>>>>> 82211fbbdb33c37f46e92ef9e5d8f7f500683aa2
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
