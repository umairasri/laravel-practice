@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="/contact">
        @csrf

        <label>Name <input type="text" name="name"></label>
        <label>Message <textarea name="message"></textarea></label>

        <button type="submit">Send</button>
    </form>
@endsection