@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-pages">
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
                            <h2>composer.json:</h2>
                            <h3>requires</h3>
                            <p>php: ^7.2.5</p>
                            <p>ext-json: *</p>
                            <p>fideloper/proxy: ^4.0</p>
                            <p>laravel/tinker: ^2.0</p>
                            <p>laravel/ui: ^2.0</p>
                            <p>spatie/laravel-translatable: ^4.1</p>
                            <h3>requires (dev)</h3>
                            <p>laravel/framework: ^7.0</p>
                            <p>ext-json: *</p>
                            <p>barryvdh/laravel-debugbar: ^3.2</p>
                            <p>beyondcode/laravel-dump-server: ^1.0</p>
                            <p>filp/whoops: ^2.0</p>
                            <p>mockery/mockery: ^1.0</p>
                            <p>fzaninotto/faker: ^1.4</p>
                            <p>nunomaduro/collision: ^4.1</p>
                            <p>phpunit/phpunit: ^8.5</p>
                            <p>facade/ignition: ^2.0</p>
                            <p>orchestra/testbench: 5.3.0</p>
                            <p>roave/security-advisories: dev-master</p>
                            <h2>package.json:</h2>
                            <h3>dependencies</h3>
                            <p>vue: ^2.6.11</p>
                            <p>vuex: ^3.3.0</p>
                            <p>bootstrap-vue: ^2.13.0</p>
                            <p>laravel-vue-pagination: ^2.3.1</p>
                            <p>vue-pluralize: 0.0.2</p>
                            <p>@fortawesome/fontawesome-free: ^5.13.0</p>
                            <h3>devDependencies</h3>
                            <p>laravel-mix: ^5.0.1</p>
                            <p>vue-template-compiler: ^2.6.11</p>
                            <p>axios: ^0.19</p>
                            <p>lodash: ^4.17.13</p>
                            <p>resolve-url-loader: ^3.1.0</p>
                            <p>sass: ^1.15.2</p>
                            <p>sass-loader: ^8.0.0</p>
                            <p class="mb-5 pb-5">cross-env: ^7.0</p>
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
