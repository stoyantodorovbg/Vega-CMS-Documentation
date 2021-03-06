@extends('front.layouts.app')

@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>

        <div class="container">
          <section class="vega-section-main">
            <div class="card">
              <h1 class="title">Contact Us</h1>
              <div class="row">
                  @if(session('status'))
                      <div class="col-12 text-success">
                          <div class="ml-auto mr-auto w-50">
                              {{ session('status') }}
                          </div>
                      </div>
                  @endif
                  @if($errors->any())
                      <div class="col-12 text-danger">
                          @foreach ($errors->all() as $error)
                              <div class="ml-auto mr-auto w-50">
                                  {{ $error }}
                              </div>
                          @endforeach
                      </div>
                  @endif
                  <div class="col-12">
                      <form method="POST" action="{{ route('front-contacts.store') }}">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <textarea name="content" class="form-control" rows="10" placeholder="Message"></textarea>
                          </div>
                          <button type="submit" class="btn btn-secondary mb-2 float-right">Send</button>
                      </form>
                  </div>
              </div>
            </div>
          </section>

        </div>

        @include('front.partials.footer')
    </div>
@endsection
