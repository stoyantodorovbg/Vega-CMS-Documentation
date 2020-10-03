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
                            <h3 class="card-title">Testing</h3>
                        </div>
                        <div class="card-body">
                            <p>If you want to run Vega CMS tests on your application, should integrate them with the command:</p>
                            <p><code class="command">php artisan integrate:vegacms-cms-testing</code></p>
                            <p>So</p>
                            <p><code class="command">phpunit vendor/vegacms/cms/tests</code></p>
                            <p>runs Vega CMS tests</p>
                            <p>As Vega CMS has functionalities that write into some PHP files, if some tests fail it could cause changes into these files.
                                When testing Vega CMS use version control system to track any changes.
                            </p>
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
