@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>

    @include('includes.form-validation')

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

    <div class="col-md-3">
        <img width="200" height="200" src="{{$post->photo ? $post->photo->name : 'http://placehold.it/40x40'}}" alt="">
    </div>

    <div class="col-md-9">

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::model($post, ['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
        </div>

    </div>

    {!! Form::close() !!}

@stop
