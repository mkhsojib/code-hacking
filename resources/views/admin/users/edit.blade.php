@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

    <div class="row">
        @include('includes.form_error')

    </div>
    <div class="row">

        <div class="col-sm-4">

            <img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/400x400' }}" alt=""
                 class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update',  $user->id], 'files'=>true]) !!}


            <div class="form-group">

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'name']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'email']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'placeholder'=>'role']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1=>'active', 0=>'inactive'), null, ['class'=>'form-control', 'placeholder'=>'status']) !!}
            </div>


            <div class="form-group">

                {!! Form::label('photo_id', 'File:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control', 'placeholder'=>'title here']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',  ['class'=>'form-control', 'placeholder'=>'password here']) !!}
            </div>

            <div class="form-group">

                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

            </div>


            {!! Form::close() !!}

        </div>

    </div>







@stop