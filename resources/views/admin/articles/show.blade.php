@extends('vegacms::admin.layouts.app')

@section('content')
    <div class="row text-center">
        <div class="col-12 pr-4 pt-2">
            <div class="mb-3 mt-1">
                <button-link :prop_data="{
                    'url': '{{ route('admin-articles.index') }}',
                    'text': '{{ phrase('buttons.all-articles') }}',
                    'htmlClass': 'btn btn-main float-right m-1 text-capitalize'
                }"
                ></button-link>
                <button-link :prop_data="{
                    'url': '{{ route('admin-articles.edit', $article->getSlug()) }}',
                    'text': '{{ phrase('buttons.edit-article') }}',
                    'htmlClass': 'btn btn-danger float-right m-1 text-capitalize'
                }"
                ></button-link>
            </div>
            <div class="pt-5">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-uppercase">{{ phrase('labels.field_name') }}</th>
                        <th class="text-uppercase">{{ phrase('labels.value') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{ phrase('labels.id') }}</th>
                        <td>{{ $article->id }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.title') }}</th>
                        <td>{{ $article->title }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.sub_title') }}</th>
                        <td>{{ $article->sub_title }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.content') }}</th>
                        <td>{{ $article->content }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.status') }}</th>
                        <td>{{ $article->status }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.created_at') }}</th>
                        <td>{{ $article->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="text-capitalize">{{ phrase('labels.updated_at') }}</th>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
