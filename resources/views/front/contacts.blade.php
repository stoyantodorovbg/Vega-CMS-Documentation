@extends('front.layouts.app')

@section('content')
    <div class="container home-page">
        <div>
            <dynamic-menu :menu_id="2"></dynamic-menu>
        </div>
        <h1 class="title mb-5">Contacts</h1>
        <div class="row">
            <div class="col-12">
                <p class="description">If You want to contact us, please fill in the form.</p>
            </div>
            @if(session('status'))
                <div class="col-12 text-center text-success">{{ session('status') }}</div>
            @endif
            <div class="col-6 ml-auto mr-auto">
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
        @include('front.partials.footer')
    </div>
@endsection
