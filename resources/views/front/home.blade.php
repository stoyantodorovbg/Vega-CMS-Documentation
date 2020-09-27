@extends('front.layouts.app')
@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <h1 class="title">Vega CMS PHP Package
            <div class="sub-title">1.12.4</div>
            <div class="sub-title">based on Laravel Framework</div>
        </h1>
        <div class="row">
            <div class="col-12">
                <article class="description"></article>
            </div>
        </div>
        @include('front.partials.footer')
    </div>
@endsection
