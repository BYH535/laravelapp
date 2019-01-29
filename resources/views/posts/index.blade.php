@extends('layouts.venueowner')
@section('content')
<h1>Posts</h1>
<ul class="list-group">
    @if (count($posts) > 0)
        @foreach ($posts as $post)
        <li class="list-group-item">
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
        </li>
        @endforeach
    @else
        <p>There is no post available !</p>
    @endif
</ul>
@endsection
