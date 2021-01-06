@extends('layouts.layout')

@section('title')
    Fruit list
@endsection

@section('content')
    @foreach($fruits as $fruit)
    <li style="color: blue">
        {{ $fruit->name }}
    </li>
    @endforeach
@endsection