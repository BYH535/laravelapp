@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Adding a new post</li>
    </ol>
</nav>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
</div>
<div class="text-center">
    {{Form::submit('Submit',['class' => 'btn btn-primary mb-2 col-3'])}}
</div>
{!! Form::close() !!}
@endsection
