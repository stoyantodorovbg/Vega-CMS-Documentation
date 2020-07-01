@extends('front.layouts.app')

@section('content')
    <div class="container home-page">
        <div class="">
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>
        <h1 class="title">Vega CMS</h1>
        <article class="description">
            <p>
                Vega CMS is build on top of Laravel. It's designed to facilitate the work of developers providing ready - made basic functionalities such as:
            </p>
            <ul>
                <li>Administration user interface.</li>
                <li>Automated creation of routes with authorizations.</li>
                <li>Reusable model search service.</li>
                <li>File management service.</li>
                <li>Functionality for using locales.</li>
                <li>Functionality for manage phrases.</li>
                <li>Menu builder.</li>
                <li>Page builder.</li>
                <li>Smart data presentation through Vue components.</li>
                <li>Automated tests</li>
            </ul>
        </article>
        <footer class="footer">
            <p>Vega CMS is open-sourced software licensed under the MIT license.</p>
        </footer>
    </div>
@endsection
