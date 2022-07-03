@extends('front.layouts.app')

@section('content')
    <div class="container-fluid home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

      <div class="container">
        <section class="vega-section-main">
              <div class="card">
                  <article class="description">
                      <h1 class="title">
                          Vega CMS PHP Package - built on top of Laravel
                      </h1>
                      <h2>
                          The purpose is to facilitates the developers work providing ready - made basic functionalities such as:
                      </h2>
                      <ul>
                          <li>Administration user interface</li>
                          <li>Automated creation of routes and authorizations</li>
                          <li>Reusable model search service</li>
                          <li>File management services</li>
                          <li>Translation functionality and localized URL-s</li>
                          <li>Menu builder</li>
                          <li>Page builder</li>
                          <li>Smart data presentation through Vue.js components</li>
                          <li>Easy to use utilities</li>
                          <li>Automated tests</li>
                      </ul>
                  </article>
              </div>
        </section>
      </div>
        @include('front.partials.footer')
    </div>
@endsection
