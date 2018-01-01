@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    @if($photos)

        <table class="table">

            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach($photos as $photo)
                    <tr>
                        <td><img width="100" height="100" src="{{ $photo->name }}" alt=""></td>
                        <td>{{ $photo->id }}</td>
                        <td>{{ $photo->name }}</td>
                        <td>{{ $photo->created_at->diffForHumans() }}</td>
                        <td>
                            {!! Form::model($photo, ['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete Photo', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    @endif

@stop
