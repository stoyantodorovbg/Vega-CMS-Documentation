@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-home-page">
        <div class="row">
            <div class="col-2 documentation-home-sidebar">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-10 content">
                <h1>Vega CMS <span>1.7.2</span></h1>

            </div>
        </div>
        <div class="row">
            <footer class="col-12 footer">
                <p>Vega CMS is open-sourced software licensed under the MIT license.</p>
            </footer>
        </div>
    </div>
@endsection
