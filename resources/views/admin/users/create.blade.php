@extends('layouts.admin')

@section('content')

    <h1>Create Users</h1>

    @include('includes.form-validation')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role ID:') !!}
        {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'placeholder'=>'Select Role']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', [0=>'Not Active', 1=>'Active'], null, ['class'=>'form-control', 'placeholder'=>'Select Status']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file', 'File:') !!}
        {!! Form::file('file', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop
