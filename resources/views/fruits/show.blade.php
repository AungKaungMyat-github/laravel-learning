@extends('layouts.layout')

@section('title')
    {{ $fruit->name }}'s details
@endsection

@section('content')
    <h1>{{ $fruit->name }}</h1>
    <p>
        {{ $fruit->description }}
    </p>

    <form action="/fruits/{{ $fruit->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
@endsection