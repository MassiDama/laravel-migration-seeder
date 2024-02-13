@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>TRAINS: {{ count($trains) }} </h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train -> company }} \ {{ $train -> departure_station }} \ {{ $train -> arrival_station }} \ {{ $train -> departure_time }} \ {{ $train -> arrival_time }}  \ {{ $train -> train_code }} \ {{ $train -> carriages }} 
            </li>
        @endforeach
    </ul>

   
@endsection
