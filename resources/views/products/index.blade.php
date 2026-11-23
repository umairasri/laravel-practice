@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="/products/create">Add Product</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
            </tr>
        @endforeach

    </table>
@endsection