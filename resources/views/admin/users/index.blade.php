@extends('layouts.admin')



@section('content')

    @if(Session::has('store_user'))


        <div class="alert alert-success" role="alert">

            {{session('store_user')}}

        </div>


    @endif



    @if(Session::has('update_user'))


        <div class="alert alert-info" role="alert">

            {{session('update_user')}}

        </div>


    @endif



    @if(Session::has('deleted_user'))


        <div class="alert alert-danger" role="alert">
            {{session('deleted_user')}}
        </div>


    @endif

    <h1>Users</h1>



    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
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
                    <td>{{$user->id}}</td>
                    <td><img height="50"
                             src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/400x400'}}"/></td>
                    <td><a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'active' : 'inactive'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>

    </table>

@stop

