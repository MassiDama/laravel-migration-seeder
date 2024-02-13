@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>TRAINS : {{ count($trains) }} </h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train -> company }}
            </li>
        @endforeach
    </ul>

   
@endsection
