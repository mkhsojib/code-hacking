@extends('layouts.admin')


@section('content')

<h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

        <div class="form-group">

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title here']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('body', 'Body:') !!}
            {!! Form::text('content', null, ['class'=>'form-control', 'placeholder'=>'body here']) !!}

        </div>

        <div class="form-group">

           {!! Form::submit('create post', ['class'=>'btn btn-primary']) !!}

        </div>


    {!! Form::close() !!}

@stop