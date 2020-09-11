@extends('front.layouts.app')

@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>
        <h1 class="title mb-5">News</h1>
        <div class="row">
            <div class="col-12">
                @foreach($articles as $article)
                    <article class="description pt-5 pb-5">
                        <h2 class="text-uppercase font-weight-bold mt-2">{{ $article->title }}</h2>
                        @if($article->sub_title)
                            <h3 class="font-italic">{{ $article->sub_title }}</h3>
                        @endif
                        <p class="mt-4">{{ $article->content }}</p>
                        <p class="mt-4 small font-italic float-right">{{ $article->created_at->diffForHumans() }}</p>
                    </article>
                @endforeach
            </div>
        </div>
        @include('front.partials.footer')
    </div>
@endsection

