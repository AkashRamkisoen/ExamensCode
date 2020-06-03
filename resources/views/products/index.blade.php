@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Products</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif


    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.index') }}">Index</a>
            </li>
            @can('create products')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            @endcan
        </ul>
    </nav>

    <table class="table . table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Productname</th>
            <th scope="col">Price</th>
            <th scope="col">Rating</th>
            <th scope="col">Product details</th>
            @can('edit products')
            <th scope="col">Edit</th>
            @endcan
            @can('delete products')
            <th scope="col">Delete</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td scope="row">{{$product->id}}</td>
                <td>{{$product->productname}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->rating}}</td>
                <td><a href="{{ route('products.show',
                    ['product' => $product->id]) }}">Details</a>
                @can('edit products')    
                <td><a href="{{route('products.edit', 
                    ['product' => $product->id])}}">Edit product</a></td>
                @endcan
                @can('delete products')    
                <td><a href="{{route('products.delete', 
                    ['product' => $product->id])}}">Delete</a></td>    
                @endcan 
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection