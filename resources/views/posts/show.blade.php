@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Post {{$post->id}}</li>
    </ol>
</nav>
<h1>Post {{$post->id}}</h1>
<div class="card">
    <div class="card-header">
        {{$post->title}}
    </div>
    <div class="card-body">
        <p class="card-text">{!!$post->body!!}</p>
        <hr>
        <div class="row">
            <small class="ml-3">Post created at : {!!$post->created_at!!}</small>
            <small class="ml-3">By : {{$post->user->name}}</small>
        </div>
    </div>
</div>
@endsection
