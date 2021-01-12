@extends('layouts.layout')

@section('title')
    Fruit list
@endsection

@section('content')
    <form action="/fruits/{{ $fruit->id }}" method="POST">
        @method('PATCH')
        @csrf
        Fruit : <input type="text" value="{{ $fruit->name }}" name="name"> <br>
        Description : <input type="text" value="{{ $fruit->description }}" name="description"> <br>
        <input type="submit" value="Update">
    </form>

    @if ($errors -> any())
    <div style="color: black">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection