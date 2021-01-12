@extends('layouts.layout')

@section('title')
    Fruit list
@endsection

@section('content')
    @foreach($fruits as $fruit)
    <li style="color: blue">
        <a href="/fruits/{{ $fruit->id }}">{{ $fruit->name }}</a>
    </li>
    @endforeach
@endsection