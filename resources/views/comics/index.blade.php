@extends('layouts.app')

{{-- @section('title', 'Lista Fumetti') --}}

@section('content')
<div class="jumbotron"></div>
    <div class="comics-container">
        @foreach ($comics as $comic)
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h3>{{ $comic['title'] }}</h3>
                <p>{{ $comic['description'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
