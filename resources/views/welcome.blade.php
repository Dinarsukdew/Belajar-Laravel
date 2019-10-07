@extends('layout.master')
@section('title','Home')
@section('content')

    @foreach($names as $name)
        <p>{{ $name }}</p>
    @endforeach

@endsection