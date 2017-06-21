@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>post id</th>
            <th>user</th>
            <th>category</th>
            <th>photo</th>
            <th>title</th>
            <th>body</th>
            <th>creted</th>
            <th>updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user_id}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->photo_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>

                </tr>


            @endforeach

        @endif
        </tbody>
    </table>

@stop