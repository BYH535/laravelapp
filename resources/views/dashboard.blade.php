@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Your Blog Posts</div>
                @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>   
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>                    
                        @endforeach
                    </table>
                @else
                    <h3 class="mx-3 my-3">You have no post shared !</h3>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
