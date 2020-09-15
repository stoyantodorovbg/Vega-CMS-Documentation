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
                    <div class="col-12">
                        <h1>Localization</h1>
                        <p>Locales data can be managed though Administration.</p>
                        <img src="{{ asset('storage/documentation-screenshots/locales/admin-edit-locale.png') }}"
                             alt="admin-edit-locale" class="w-75"
                        >
                        <h2>Language:</h2>
                        <p>It is displayed on the select box.</p>
                        <img src="{{ asset('storage/documentation-screenshots/locales/locales-languages.png') }}"
                             alt="locales-widget-language" class="w-25"
                        >
                        <p class="mt-2">Only the active locales are added to it.</p>
                        <h2>URL Code</h2>
                        <p>Locale code is set through the cms.php config file that is published.
                            It corresponds to the locale code field that is set though the Administration.
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
                        <p>When there is at least one locale code that is set though the administration, this code adds the widget that changes the active site locale:</p>
                        <pre>{{ '<change-locale></change-locale>' }}</pre>
                        <p class="mb-5 pb-5">It manages all active locales.</p>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
