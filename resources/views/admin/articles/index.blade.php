@extends('vegacms::admin.layouts.app')

@section('content')
    <model-index :model_name="'\\App\\Models\\Article'"
                 :actions="{
                        'show': 1,
                        'edit': 1,
                        'delete': 1
                    }"
    ></model-index>
@endsection

