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
                        <h1>Utilities</h1>
                        <h2>Admin Index Pages</h2>
                        <p>It is easy to display models data in the administration. This code renders users page:</p>
                        <pre>
{{ '<model-index :model_name="\'\\\Vegacms\\\Cms\\\Models\\\User\'"
             :actions="{
                    \'show\': 1,
                    \'edit\': 1,
                    \'delete\': 1
                }"
></model-index>' }}
                        </pre>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/admin-index-page.png') }}"
                             alt="admin index page" class="w-75"
                        >
                        <h2>JSON input</h2>
                        <p>JSON data can be presented and edited by dynamically rendered input fields. Send your JSON data to JsonInput Vue.js component:</p>
                        <pre>
{{
    '<json-input
        json_data="{{ $page->meta_tags } }"
        input_name="meta_tags"
        :level="1"
></json-input>'
}}
                        </pre>
                        <p>It renders</p>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input.png') }}"
                             alt="JSON input" class="w-50"
                        >
                        <p class="mt-3">You can add text field</p>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-add-text-key.png') }}"
                             alt="JSON input add text field" class="w-50"
                        >
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-text-key-added.png') }}"
                             alt="JSON input text field added" class="w-50 mt-2"
                        >
                        <p class="mt-3">or field that may contains nested fields</p>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-add-json-key.png') }}"
                             alt="JSON input add JSON field" class="w-50"
                        >
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-json-key-added.png') }}"
                             alt="JSON input JSON field added" class="w-50 mt-2"
                        >
                        <h2>JSON Presenter</h2>
                        <p>JSON data can be presented easily by JsonPresented Vue.js component:</p>
                        <pre>
{{
    '<json-presenter :json_data="{{ $menu->title } }"></json-presenter>'
}}
                        </pre>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-presenter.png') }}"
                             alt="JSON presenter" class="w-75"
                        >
                        <h2>Connected Select Boxes</h2>
                        <p>When using Vega CMS you can easily add a select box witch options depends on the selected option in other select box.
                            Add Vue.js components like these in your template:</p>
                        <pre>
{{ '
<parent-select-input
        :input_data="{
            name: \'menu_id\',
            id: \'munu_item_menu_id\'
        }"
        event_name="munu_item_menu_id_selected"
        options="{{ $menus } }"
        :http_data="{
            endpoint: \'derived-input-data\',
            params: {
                model: \'\\Vegacms\\Cms\\Models\\MenuItem\'
            },
            field_name: \'menu_id\'
        }"
        selected_value="{{ isset($menuItem) ? $menuItem->menu_id  : null} }"
></parent-select-input>

<derived-select-input
        :input_data="{
            name: \'parent_id\',
            id: \'munu_item_parent_id\'
        }"
        listen_on="munu_item_menu_id_selected"
        selected_value="{{ isset($menuItem) ? $menuItem->parent_id  : null} }"
></derived-select-input>
' }}
                        </pre>
                        <p><strong>input_data</strong> name and id are the HTML attributes that both component render.</p>
                        <p>Choose unique <strong>event_name</strong>. <strong>derived-select-input</strong> listens on the same event key.</p>
                        <p>Send the available options as <strong>options</strong> key to <strong>parent-select-input</strong>.This data have to be Collection that contains such items:</p>
                        <pre>
[
    'value' => $item->id,
    'text' => $item->text
]
                        </pre>
                        <p>In <strong>http_data</strong> params set the model namespace for the requested data.
                            <strong>field_name</strong> key determines the model field that is used for filtering.</p>
                        <p><strong>selected_value</strong> is the value that will be searched.</p>
                        <p><strong>derived-input-data</strong> endpoint will call EloquentService class that will return Builder instance with the set filters.
                        <p>After that form DataRepository class it will call a method in format <strong>modelNameData</strong> that have receives Builder instance and returns a Collection.</p>
                        <p>Add such method in <strong>App\Traits\DataRepositoryTrait</strong> in order to process the data you need.
                            Don't forget that <strong>derived-select-input</strong> component expects data for the options that renders in the same format as <strong>parent-select-input</strong>.
                        </p>
                    </div>
                </div>
                <div class="row">
                    @include('front.partials.footer')
                </div>
            </div>
        </div>
    </div>
@endsection
