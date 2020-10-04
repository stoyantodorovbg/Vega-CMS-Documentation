@extends('front.layouts.app')

@section('content')
    <div class="container-fluid home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <div class="container">
          <section class="vega-section-main">
              <h1 class="title align-self-start font-size-3_2">News</h1>
              <div class="card">
                <div class="img-panel">
                  <img src="/Vega-CMS-Documentation/public/documentation-thumbnail.jpg" alt="Vega-Documentation" class="img-fluid">
                </div>
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
              </div>
          </section>
        </div>
        @include('front.partials.footer')
    </div>
@endsection
