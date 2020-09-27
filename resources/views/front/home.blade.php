@extends('front.layouts.app')
@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <h1 class="title">Vega CMS 1.12.4
            <div class="sub-title">PHP Package</div>
            <div class="sub-title">based on Laravel Framework</div>
        </h1>
        <h3 class="text-center display-3">
        <a href="https://packagist.org/packages/vegacms/cms#dev-master" target="_blank">
            Packagist
        </a>
        </h3>
        <div class="row">
            <div class="col-12">
                <article class="description"></article>
            </div>
        </div>
        @include('front.partials.footer')
    </div>
@endsection
