@extends('front.layouts.app')
@section('content')
    <div class="container-fluid home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <div class="container">
          <section class="vega-section-main">

              <div class="logo-panel w-100 text-center">
                    <img src="/logo.png" width="200" alt="Vega CMS" class="img-fluid">
                    <h3 class="vega-cms-home">VEGA CMS PHP Package</h3>
                    <h4 class="vega-cms-home-subtitle">1.3<h4>
                    <h5>based on Laravel Framework</h5>
              </div>

              <div class="text-center display-3">
                  <div class="mt-3 homepage-banner-panel">
                      <a href="https://packagist.org/packages/vegacms/cms#dev-master" target="_blank">
                          <img src="/packagist-banner.jpg" width="200" class="homepage-banner" alt="Packagist">
                      </a>
                  </div>
                  <div class="mt-2 homepage-banner-panel">
                      <a href="https://github.com/stoyantodorovbg/Vega-CMS-Package" target="_blank">
                            <img src="/github-banner.jpg" width="200"  class="homepage-banner" alt="Packagist">
                      </a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <article class="description"></article>
                  </div>
              </div>
          </section>

        </div>
        @include('front.partials.footer')
    </div>
@endsection
