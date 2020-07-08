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
                <h1>Authorization</h1>
            </div>
        </div>
        <div class="row">
            <footer class="col-12 footer">
                <p>Vega CMS is open-sourced software licensed under the MIT license.</p>
            </footer>
        </div>
    </div>
@endsection
