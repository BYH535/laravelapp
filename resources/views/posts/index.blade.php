@extends('layouts.app')
@section('content')
<div class="row">
    <h1 class="col-10">Posts</h1>
    <a href="/posts/create" class="btn btn-primary mb-3">Add New Post</a>
</div>
<ul class="list-group">
    @if (count($posts) > 0)
    @foreach ($posts as $post)
    <li class="list-group-item">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Written in : {{$post->created_at}}</small>
    <small>By : {{$post->user->name}}</small>
    </li>
    @endforeach
    {{$posts->links()}}
    @else
    <p>There is no post available !</p>
    @endif
</ul>
@endsection
