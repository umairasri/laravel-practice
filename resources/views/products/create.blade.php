@extends('layouts.app')

@section('title', 'New product')

@section('content')
    <h1>New product</h1>

    <form method="POST" action="/products">
        @csrf

        <div>
            <label>Name
                <input type="text" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Price
                <input type="text" name="price" value="{{ old('price') }}">
            </label>
            @error('price')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stock
                <input type="text" name="stock" value="{{ old('stock') }}">
            </label>
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Save</button>
    </form>
@endsection