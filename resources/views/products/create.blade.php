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
                <a class="nav-link active" href="{{ route('products.create') }}">Create</a>
            </li>
        </ul>
    </nav>
    
    <form method="POST" action="/products">
    
        @csrf

        <div class="form-group">
            <label for="productname">Productname</label>
            <input type="text" name="productname" class="form-control" id="productname"
                aria-describedly="productnameHelp" placeholder="Enter productname">
        </div>
    
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="productname">Price</label>
            <input type="text" name="price" class="form-control" id="price"
                aria-describedly="priceHelp" placeholder="Enter price">
        </div>

        <div class="form-group">
            <label for="productname">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating"
                aria-describedly="ratingHelp" placeholder="Enter rating">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection