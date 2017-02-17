@extends('layouts.app')
@section('content')

    <main class="container-fluid">
        <div class="container-fluid">
            <article>
                <div class="jumbotron">
                    <h1>{{ $blog->title }}</h1><a style="float: right;" href="{{ action('BlogController@edit',$blog->id) }}">Chỉnh Sửa</a>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <p>{{ $blog->body }}</p>
                </div>
            </article>
        </div>
    </main>

@endsection