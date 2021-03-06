@extends('front.layouts.app')

@section('content')
    <div class="container-fluid documentation-pages">
        <div class="row">
            <div class="col-lg-2 documentation-home-sidebar sticky-top">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-lg-10 content d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <div class="documentation-home-main-nav">
                            <dynamic-menu :menu_id="4"></dynamic-menu>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="logo-panel w-100 text-center">
                            <img src="/logo.png" width="200" alt="Vega CMS" class="img-fluid">
                            <h3 class="vega-cms-home">VEGA CMS PHP Package</h3>
                            <h4 class="vega-cms-home-subtitle">1.12.4<h4>
                            <h5>based on Laravel Framework</h5>
                      </div>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
