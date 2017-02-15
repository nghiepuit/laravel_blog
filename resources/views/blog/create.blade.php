@extends('layouts.app')
@section('content')

    <main class="container-fluid">
        <div class="container-fluid">
            <div class="jumbotron">
                <h1>Bài Viết Mới Nhất!</h1>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                {!! Form::open(['action' => 'BlogController@store','method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('title','Tiêu Đề: ') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('title',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body','Nội Dung: ') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('body',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Lưu',['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </main>

@endsection