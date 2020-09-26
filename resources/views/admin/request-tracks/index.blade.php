@extends('vegacms::admin.layouts.app')

@section('content')
    <model-index :model_name="'\\App\\Models\\RequestTrack'"
                 :actions="{}"
                 :add_create_button="false"
    ></model-index>
@endsection
