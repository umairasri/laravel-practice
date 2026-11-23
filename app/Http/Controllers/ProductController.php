<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(\App\Http\Requests\StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect('/products')->with('success', 'Product saved.');
    }
}