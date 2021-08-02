@extends('front.layouts.app')

@section('content')
    <div class="container-fluid documentation-pages documentation-pages">
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
                            <h3 class="card-title">Localization</h3>
                        </div>
                        <div class="card-body">
                          <p>Locales could be managed though Administration.</p>
                          <img src="{{ asset('storage/documentation-screenshots/locales/admin-edit-locale.png') }}"
                               alt="admin-edit-locale" class="w-75"
                          >
                          <h2>Language:</h2>
                          <p>The locale language is displayed on a select box.</p>
                          <img src="{{ asset('storage/documentation-screenshots/locales/locales-languages.png') }}"
                               alt="locales-widget-language" class="w-25"
                          >
                          <p class="mt-2">Only the active locales are added.</p>
                          <h2>URL Code</h2>
                          <p>Locale code is set in cms.php config file.</p>
                          <pre>
                          'locales' => [
                              'codes' => ['en', 'bg'],
                          ],
                          </pre>
                          <p class="mt-5">This configuration provides two active locales added to URL:</p>
                          <img src="{{ asset('storage/documentation-screenshots/locales/locale-code-configuration-en.png') }}"
                               alt="locale-code-configuration-en" class="w-25"
                          >
                          <img src="{{ asset('storage/documentation-screenshots/locales/locale-code-configuration-bg.png') }}"
                                alt="locale-code-configuration-bg" class="w-25"
                          >
                          <p class="mt-5">For monolingual site just add an empty string:</p>
                          <pre>
  'locales' => [
      'codes' => [''],
  ],
  </pre>
                          <h2>Front-End Widget</h2>
                          <p>When there is at least one active locale this widget could changes the active site locale:</p>
                          <pre>{{ '<change-locale></change-locale>' }}</pre>
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
