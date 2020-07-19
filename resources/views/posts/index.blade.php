@extends('layouts.main')

@section('title')

    Home Page

@endsection

@section('sidebar')
   This is the side menu
@endsection

@section('content')
    @foreach($posts as $post)
        <a href="/posts/title"><h1>Title of Post</h1></a>
        <p>Title of Post</p>
        <hr>
    @endforeach

    

@endsection