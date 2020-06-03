@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Products</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.delete',
                                        ['product' => $product->id]) }}">Delete product</a>
            </li>
        </ul>
    </nav>
    
    <form method="POST" action="/products/{{$product->id}}">
        @method('DELETE')         
        @csrf

        <div class="form-group">
            <label for="productname">Productname</label>
            <input type="text" name="productname" class="form-control" id="productname"
                aria-describedly="productnameHelp" value="{{ $product->productname }}"
                disabled="disabled">
        </div>
    
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"
            disabled="disabled">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price"
                aria-describedly="priceHelp" value="{{ $product->price }}"
                disabled="disabled">
        </div>
    
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating"
                aria-describedly="ratingHelp" value="{{ $product->rating }}"
                disabled="disabled">
        </div>

        <button type="submit" class="btn btn-primary">Delete</button>

    </form>

@endsection