@extends('front.layouts.app')

@section('content')
    <div class="container-fluid documentation-pages">
        <div class="row">
            <div class="col-lg-2 documentation-home-sidebar sticky-top">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-lg-10 content">
                <div class="container">
                  <div class="documentation-home-main-nav">
                      <dynamic-menu :menu_id="4"></dynamic-menu>
                  </div>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">Requirements</h3>
                        </div>
                        <div class="card-body">
                            <p>php: ^8.0.2</p>
                            <p>laravel/framework: ^9.0</p>
                            <p>spatie/laravel-translatable: ^5.2</p>
                            <p>vue: ^2.6.11</p>
                            <p>vuex: ^3.3.0</p>
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
