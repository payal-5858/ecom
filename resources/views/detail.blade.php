@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
                <br><br>
                <a href="/">Go back</a>
                <h3>Name : {{ $product['name'] }}</h3>
                <h3>Price : {{ $product['price'] }}</h3>
                <h3>Category : {{ $product['category'] }}</h3>
                <h3>Description : {{ $product['description'] }}</h3>
                <br><br>
                <form action="/addtocart">
                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                    @csrf
                    <button class="btn btn-success">Add To Cart</button>
                </form>
                <br><br>
                <button class="btn btn-primary">By Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection
