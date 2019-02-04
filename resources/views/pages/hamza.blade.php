@extends('layouts.app')
@section('content')
<div class="text-center mb-5">
    <h1>
        Ana smiti si Hamza
    </h1>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="row">
            <strong>Fullname : </strong><p>{{$fullname}} </p>
        </div>
        <div class="row">
            <strong>Age : </strong><p>{{$age}} </p>
        </div>
        <div class="row">
            <strong>Phone Number : </strong><p> {{$phonenumber}} </p>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="row">
            <strong>Address : </strong><p> {{$address}} </p>
        </div>
        <div class="row">
            <strong>Skills : </strong>
            <ul class="list-group">
                @if (count($skills) > 0)
                @foreach ($skills as $skill)
                <li class="list-group-item">
                    {{$skill}};
                </li>
                @endforeach
                @endif

            </ul>
        </div>
    </div>
    <div class="col-xl-12">
        <p>
            In this video I will talk about blade templating. We will look at passing in data,
            interpolation, adding logic to our views. I will also show you how to compile assets
            using Laravel Mix. We will compile Sass files to regular css.
        </p>
    </div>
</div>
@endsection
