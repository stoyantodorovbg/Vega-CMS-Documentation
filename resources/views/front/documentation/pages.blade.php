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
                        <h1>Pages</h1>
                        <p>Vega CMS can renders pages from DB data.
                            Page data can be managed via Administration or DB seeder.</p>
                        <h2>Manage Page data via Administration</h2>
                        <h3>Manage Page properties</h3>
                        <p>Through the page form Status, URL, HTML classes, Title, Description, CSS styles and Meta tags can be set.</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/admin-page-form.png') }}"
                             alt="admin page form" class="w-75"
                        >
                        <p class="mt-3">The Page content can be added through Containers.</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/page-containers-index.png') }}"
                             alt="page containers index" class="w-75"
                        >
                        <p class="mt-3">Page Container can be nested into other Page Container. Its tag can be selected.
                            Only containers which have active status are rendered.</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/page-container-main-properties.png') }}"
                             alt="page container main properties" class="w-75"
                        >
                        <p class="mt-3">Different kinds of HTML classes can be set to the container.</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/page-container-html-classes.png') }}"
                             alt="page container html classes" class="w-75"
                        >
                        <p class="mt-3">The container has four JSON fields</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/page-container-json-fields.png') }}"
                             alt="page container JSON fields" class="w-75"
                        >
                        <p class="mt-3">Though them can be added settings like these:</p>
                        <img src="{{ asset('storage/documentation-screenshots/pages/page-container-body.png') }}"
                             alt="page container body" class="w-75"
                        >
                        <p class="mt-3">When JSON field is used nested HTML tags can be created.</p>
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
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
