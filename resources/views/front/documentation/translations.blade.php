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
                              <h3 class="card-title">Translations</h3>
                          </div>
                          <div class="card-body">
                            <p>Vega CMS provides translation functionality that is related to the localization.
                                The phrases are translated to the selected locale when they have content for it.
                                They could be managed through Administration or DB seeder.</p>
                            <h2>Translation management through Administration</h2>
                            <p>In the Phrases section a translation can be created or edited.</p>
                            <img src="{{ asset('storage/documentation-screenshots/translations/admin-edit-translation.png') }}"
                                 alt="admin edit translation" class="w-75"
                            >
                            <p class="mt-3">The active locales have added to the form.</p>
                            <h2>Usage</h2>
                            <p>A phrase can be added via helper function:</p>
                            <pre>
    phrase('buttons.edit-user')
                            </pre>
                            <p class="mb-5 pb-5">It translates the phrase with such system name to the text entered for the selected locale.
                                If there isn't a translation for the selected locale the system name is displayed.
                                This function makes a DB query only the first time when a phrase has called through it.
                                The next times the content is rendered from the cache. </p>
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
