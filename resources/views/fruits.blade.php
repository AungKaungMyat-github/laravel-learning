@extends('layouts.layout')

@section('title')
    Fruit list
@endsection

@section('content')
   @foreach($flowers as $flower)
    <li style="color: yellow">
        {{ $flower }}
    </li>
    @endforeach
    @foreach($fruits as $fruit)
    <li style="color: blue">
        {{ $fruit }}
    </li>
    @endforeach
@endsection