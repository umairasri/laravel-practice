@extends('layouts.app')

@section('title', 'Thanks')

@section('content')
    <h1>Thanks, {{ $name }}!</h1>
    <a href="/contact">Send another</a>
@endsection