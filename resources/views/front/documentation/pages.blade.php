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
                <div class="container">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">Pages</h3>
                        </div>
                        <div class="card-body">
                            <p>Vega CMS can renders pages from DB data.
                                Page data can be managed via Administration or DB seeder.</p>
                            <h2>Manage Page data via Administration</h2>
                            <h3>Manage Page properties</h3>
                            <p>Through the page form Status, URL, HTML classes, Title, Description, CSS styles and Meta tags can be set.</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/admin-page-form.png') }}"
                                 alt="admin page form" class="w-75"
                            >
                            <p class="mt-5">Page Containers add HTML tags.</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-containers-index.png') }}"
                                 alt="page containers index" class="w-75"
                            >
                            <p class="mt-5">Page Container can be nested into other Page Container.
                                Only containers which have active status are rendered.</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-main-properties.png') }}"
                                 alt="page container main properties" class="w-75"
                            >
                            <p class="mt-5">Page Container has fields which manage its positioning through Bootstrap Grid. Also it has a field for additional HTML classes.</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-html-classes.png') }}"
                                 alt="page container html classes" class="w-75"
                            >
                            <p class="mt-5">The container has four JSON fields</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-json-fields.png') }}"
                                 alt="page container JSON fields" class="w-75"
                            >
                            <p class="mt-5">Though them can be added settings like these:</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-body.png') }}"
                                 alt="page container body" class="w-75"
                            >
                            <p class="mt-5">Use JSON field to create nested HTML tags.</p>
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-add-json-key.png') }}"
                                 alt="page container add JSON key" class="w-75"
                            >
                            <img src="{{ asset('storage/documentation-screenshots/pages/page-container-json-structure.png') }}"
                                 alt="page container JSON structure" class="w-75 mt-3"
                            >
                            <h2>Manage page data via DB seeder</h2>
                            <p>You can publish Vega Cms seeders and reuse the code from PageTestTableSeeder to create your own pages.</p>
                            <p class="mb-5 pb-5"><code class="command">php artisan vendor:publish --tag=vegacms-seeds</code></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
