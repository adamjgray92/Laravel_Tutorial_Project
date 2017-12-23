@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    @if(Session::has('admin_user_delete'))
        <p class="p-3 mb-2 bg-danger text-white">{{session('admin_user_delete')}}</p>
    @endif

    @if(Session::has('admin_user_edit'))
        <p class="p-3 mb-2 bg-success text-white">{{session('admin_user_edit')}}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Profile Picture</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

            @if($users)

                @foreach($users as $user)
                    <tr>
                        <td>
                            @if($user->photo)
                                <img height="40" width="40" src="{{$user->photo->name}}">
                            @else
                                <img src="http://via.placeholder.com/40x40" alt="">
                            @endif</td>
                        <td>{{$user->id}}</td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach

            @endif
        </tbody>
    </table>
@stop
