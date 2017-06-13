@extends('layouts.admin')


@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

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
        {!! Form::select('role_id',[''=>'Chose Options'] + $roles, null, ['class'=>'form-control', 'placeholder'=>'role']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1=>'active', 0=>'inactive'), 0, ['class'=>'form-control', 'placeholder'=>'status']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',  ['class'=>'form-control', 'placeholder'=>'password here']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

    </div>


    {!! Form::close() !!}

    @include('includes.form_error')



@stop