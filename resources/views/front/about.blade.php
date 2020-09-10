@extends('front.layouts.app')

@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>
        <p class="title"></p>
        <article class="description">
            <p>
                Vega CMS is build on top of Laravel. It's designed to facilitate the developers work providing ready - made basic functionalities such as:
            </p>
            <ul>
                <li>Administration user interface</li>
                <li>Automated creation of routes with authorizations</li>
                <li>Reusable model search service</li>
                <li>File management services</li>
                <li>Translation functionality with URL locales</li>
                <li>Menu builder</li>
                <li>Page builder</li>
                <li>Smart data presentation through Vue.js components</li>
                <li>Easy to use utilities</li>
                <li>Automated tests</li>
            </ul>
        </article>
        @include('front.partials.footer')
    </div>
@endsection
