@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            <div class="col-sm-6">
                <br><br>
                <a href="/">Go back</a>
                <h2>Name : {{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h3>Category : {{ $product['category'] }}</h3>
                <h3>Description : {{ $product['description'] }}</h3>
                <br><br>
                <button class="btn btn-success">Add To Cart</button>
                <br><br>
                <button class="btn btn-primary">By Now</button>
                <br>
            </div>
        </div>

    </div>
@endsection
