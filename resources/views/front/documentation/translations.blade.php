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
                              <h3 class="card-title">Translations</h3>
                          </div>
                          <div class="card-body">
                            <p>Vega CMS provides translation functionality related to the localization.
                                It translates a phrase to selected locale when there is translated content.
                                The phrases could be managed through Administration or DB seeder.</p>
                            <h2>Translation management through Administration</h2>
                            <p>In Phrases section a translation could be created or edited.</p>
                            <img src="{{ asset('storage/documentation-screenshots/translations/admin-edit-translation.png') }}"
                                 alt="admin edit translation" class="w-75"
                            >
                            <p class="mt-3">There are form fields for all active locales.</p>
                            <h2>Usage</h2>
                            <p>A helper function translates the phrase:</p>
                            <pre>
    phrase('buttons.edit-user')
                            </pre>
                            <p class="mb-5 pb-5">When there isn't a translation for the selected locale the system name is displayed.
                              <br>The function loads the phrase from DB only once because caches it.
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
