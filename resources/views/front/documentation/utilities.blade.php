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
                          <h3 class="card-title">Utilities</h3>
                      </div>
                      <div class="card-body">
                        <h2>Admin Index Pages</h2>
                        <p>It is easy to display models data in the Administration. This code renders users index page:</p>
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
                        <p>JSON data could be presented and edited by dynamically rendered input fields. Send your JSON data to JsonInput Vue.js component:</p>
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
                        <p class="mt-3">You could add a simple text field</p>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-add-text-key.png') }}"
                             alt="JSON input add text field" class="w-50"
                        >
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-text-key-added.png') }}"
                             alt="JSON input text field added" class="w-50 mt-2"
                        >
                        <p class="mt-3">or a field that may contains nested fields</p>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-add-json-key.png') }}"
                             alt="JSON input add JSON field" class="w-50"
                        >
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-input-json-key-added.png') }}"
                             alt="JSON input JSON field added" class="w-50 mt-2"
                        >
                        <h2>JSON Presenter</h2>
                        <p>JSON data can be presented easily by JsonPresenter Vue.js component:</p>
                        <pre>
                          {{
                              '<json-presenter :json_data="{{ $menu->title } }"></json-presenter>'
                          }}
                        </pre>
                        <img src="{{ asset('storage/documentation-screenshots/utilities/json-presenter.png') }}"
                             alt="JSON presenter" class="w-75"
                        >
                        <h2>Connected Select Boxes</h2>
                        <p>It is easy to add a select box with options which depend on the selected option in another select box.
                           Use the following components for this purpose:</p>
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
                        <p><strong>input_data</strong> name and id are the HTML attributes that both components render.</p>
                        <p>Choose unique <strong>event_name</strong>. <strong>DerivedSelectInput</strong> listens on the same event key.</p>
                        <p>Send the available options as <strong>options</strong> key to <strong>ParentSelectInput</strong>.This data should be Collection that contains such items:</p>
                        <pre>
                            [
                                'value' => $item->id,
                                'text' => $item->text
                            ]
                        </pre>
                        <p>In <strong>http_data</strong> params set the model namespace for the requested data.
                            <strong>field_name</strong> key determines the model field that is used for filtering.</p>
                        <p><strong>selected_value</strong> is the searched value.</p>
                        <p><strong>derived-input-data</strong> endpoint calls EloquentService class that returns Builder instance with the set filters.
                        <p>This instance is transformed to Collection in DataRepository that calls a method in format <strong>modelNameData</strong>.</p>
                        <p>Add such method in <strong>App\Traits\DataRepositoryTrait</strong> in order to process the data you need.
                            <strong>DerivedSelectInput</strong> component expects data for the options that renders in the same format as <strong>ParentSelectInput</strong>.
                        </p>
                        <h2>Services</h2>
                        <h3>EloquentFilterService</h3>
                        <pre>
public function addFilters(Request $request, string $model): Builder;
                        </pre>
                        <p>The Request instance should contains such parameters:</p>
                        <pre>
'filters' => 'json',
'items_per_page' => 'required|integer|between:1,100',
                        </pre>
                        <p><strong>filters</strong> should be in this format:</p>
<pre>
{"name":{"types":{"like":{"value":"a"}}}}"
</pre>
                        <p><strong>name</strong> is the filtered field.</p>
                        <p><strong>like</strong> is the filter method.</p>
                        <p><strong>value</strong> is the searched value.</p>
                        <p>Available filter methods:</p>
                        <p><strong>exact</strong> - <strong>=</strong> SQL operator</p>
                        <p><strong>like</strong> - <strong>like</strong> SQL operator</p>
                        <p><strong>greaterThen</strong> - <strong>></strong> SQL operator</p>
                        <p><strong>lessThen</strong> - <strong><</strong> SQL operator</p>
                        <p><strong>whereHasMany</strong> filters by a field from related model - <strong>whereHas Eloquent method</strong>.
                            When use this method <strong>filters</strong> have to be in format like this:</p>
                        <pre>
{"name":{"types":{"whereHasMany":{"value":{"relationMethod":"users","value":"UserName"}}}}"
                        </pre>
                        <h3>FileCreateService</h3>
                        <pre>
public function createFile(string $folderPath, string $fileName, string $fileExtension, string $stubPath, $capitalize = true);
                        </pre>
                        <h3>FileDestroyService</h3>
                        <pre>
public function destroyFile(string $folderPath, string $fileName, string $fileExtension): bool;
                        </pre>
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
