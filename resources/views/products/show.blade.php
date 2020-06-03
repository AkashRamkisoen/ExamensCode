@extends('layout.layout')

@section('content')

<h1 class="mt-5">Products</h1>

<nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.show',
                                        ['product' => $product->id]) }}">Product Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $product->productname }}</h2>
            <p class="card-text">{{ $product->description}}</p>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Rating: {{ $product->rating }}</p>
        </div>
    </div>

@endsection