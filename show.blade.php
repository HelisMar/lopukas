@extends('layout')
@section('title', 'Blogpost')
@section('content')

    <h1 class="display-one">{{$blog->title}}</h1>
    <p>{{$blog->body}}</p>
    <a href="{{url()->previous()}}"class="btn btn-primary">Back</a>
@endsection
