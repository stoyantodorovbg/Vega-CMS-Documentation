@extends('front.layouts.app')
@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <h1 class="title">Vega CMS<span> 1.12.1</span></h1>
        <div class="row">
            <div class="col-12">
                <article class="description"></article>
            </div>
        </div>
        @include('front.partials.footer')
    </div>
@endsection
