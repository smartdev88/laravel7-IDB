@extends('master')

@section('title', 'show post')

@section('content')

    <h1>Show post for {{ $author }}</h1>
    <ul>
        {{-- <li>{{ $data['title'] }}</li> --}}
        <li>{!! $data['title'] !!}</li>
    </ul>
    
@endsection