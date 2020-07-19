@extends('layouts.main')

@section('title')

    Home Page

@endsection

@section('sidebar')
   This is the side menu
@endsection

@section('content')
@if($age > 20)
    Welcome back, {{$user_name}} you are {{$age}} years old
    @elseif ($age < 20)
    You're too young bud
    @endif
@endsection