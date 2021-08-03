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
                            <h3 class="card-title">Testing</h3>
                        </div>
                        <div class="card-body">
                            <p>This command line integrates Vega CMS tests:</p>
                            <p><code class="command">php artisan integrate:vegacms-cms-testing</code></p>
                            <p>and this runs the tests:</p>
                            <p><code class="command">phpunit vendor/vegacms/cms/tests</code></p>
                            <p>When testing Vega CMS it is highly recommended to use version control system because there are tested functionalities which write code in PHP files - if some tests fail these files will remain changed.
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
