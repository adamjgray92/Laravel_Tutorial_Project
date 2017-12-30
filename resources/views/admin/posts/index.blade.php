@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

            @if($posts)

                @foreach($posts as $post)
                    <tr>
                        <td><img width="40" height="40" src="{{$post->photo ? $post->photo->name : 'http://placehold.it/40x40'}}" alt=""></td>
                        <td>{{$post->id}}</td>
                        <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{$post->title}}</a></td>
                        <td>{{str_limit($post->body, 20)}}</td>
                        <td><a href="{{route('admin.users.edit', $post->user->id)}}">{{$post->user->name}}</a></td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorised' }}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach

            @endif
        </tbody>
    </table>
@stop
