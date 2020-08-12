@extends('front.layouts.app')

@section('content')
    <div class="container m-0 p-0 w-100 documentation-pages">
        <div class="row">
            <div class="col-2 documentation-home-sidebar">
                <dynamic-menu :menu_id="3"></dynamic-menu>
            </div>
            <div class="col-10 content">
                <div class="row">
                    <div class="col-12">
                        <div class="documentation-home-main-nav">
                            <dynamic-menu :menu_id="4"></dynamic-menu>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mr-5 ml-5">
                        <h1>Localization</h1>
                        <h2>Language:</h2>
                        <p>Locales language can be managed through the Administration.</p>
                        <img src="{{ asset('storage/documentation-screenshots/locales/locales-languages.png') }}"
                             alt="locales-widget-language" class="w-25"
                        >
                        <h2>URL Code</h2>
                        <p>Locale code is set through the cms.php config file that is published.
                            It has correspond to the locale code field set though the Administration.
                        </p>
                        <pre>
'locales' => [
    'codes' => ['en', 'bg'],
],
</pre>
                        <p class="mt-5">Such configuration provides two active locales which are added to URL:</p>
                        <img src="{{ asset('storage/documentation-screenshots/locales/locale-code-configuration-en.png') }}"
                             alt="locale-code-configuration-en" class="w-25"
                        >
                        <img src="{{ asset('storage/documentation-screenshots/locales/locale-code-configuration-bg.png') }}"
                              alt="locale-code-configuration-bg" class="w-25"
                        >
                        <p class="mt-5">When you haven't need of multilingual site just add an empty string:</p>
                        <pre>
'locales' => [
    'codes' => [''],
],
</pre>
                        <h2>Front-End Widget</h2>
                        <p>When there is at least one locale code set though the administration, this code adds the widget that changes the active site locale:</p>
                        <pre>{{ '<change-locale></change-locale>' }}</pre>
                        <p>It manages all locales which have active status.</p>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
