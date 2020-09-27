@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-pages">
        <div class="row">
            <div class="col-2 documentation-home-sidebar">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-10 content">
                <div class="row">
                    <div class="col-12 mr-5 ml-5">
                        <div class="documentation-home-main-nav">
                            <dynamic-menu :menu_id="4"></dynamic-menu>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="vega-cms-home">Vega CMS 1.12.4
                            <div class="sub-title">Open Sourced PHP Package based on Laravel Framework</div>
                            <div>
                                <a class="sub-title" href="https://packagist.org/packages/vegacms/cms#dev-master" target="_blank">
                                    Packagist
                                </a>
                            </div>
                            <div>
                                <a class="sub-title" href="https://github.com/stoyantodorovbg/Vega-CMS-Package" target="_blank">
                                    Github
                                </a>
                            </div>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
