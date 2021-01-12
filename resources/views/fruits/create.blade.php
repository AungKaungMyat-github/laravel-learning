@extends('layouts.layout')

@section('title')
    Fruit create form
@endsection

@section('content')
   <form action="/fruits" method="POST">
        @csrf
        Fruit : <input type="text" name="name"> <br>
        Description : <input type="text" name="description"> <br>
        <input type="submit" value="Add">
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