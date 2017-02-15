@extends('layouts.app')
@section('content')

    <main class="container-fluid">
        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Bài Viết Mới Nhất!</h1>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                @foreach($blogs as $blog)
                    <article>
                        <h2><a href="{{ action('BlogController@show',[$blog->id]) }}">{{ $blog->title }}</a></h2>
                        <p>{{ $blog->body }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </main>

@endsection