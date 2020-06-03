@extends('layout.layout')

@section('content')

    <div class="hotel-list">
        <h1>Search results</h1>
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Products</h2>
        <div class="row">
            @foreach($produtcs as $product)
                <div class="col-lg-4 col-md-6 col-12 justify-content-around">
                    <div class="product-item">
                        <ul>
                                <li class="product-name">{{ $hotel->name }}</li>
                                <a href="{{ route('hotels.show', $hotel) }}">
                                <li><img src="https://www.lottehotel.com/content/dam/lotte-hotel/lotte/yangon/main/180809-1-2000-mai-yangon-hotel.jpg.thumb.768.768.jpg" alt=""></li>
                                </a>
                                <li class="product-price">{{ $products->price }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
                @if (count ( $products  ) == 0)
                    <div class="alert alert-danger" role="alert">
                       <p>Cannot find products</p>
                    </div>
                @endif
        </div>
    </div>

@endsection