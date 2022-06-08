@extends('layout')
@section('content')
<br>
<h3 align="center">New Products</h3>
<br>
<div class="container">
    <div class="row" style="justify-content:space-between">
        @foreach($products as $product)
        <div class="card" style="width: 21rem; margin-bottom:2%">
            <img class="card-img-top" src="../storage/{{$product->photo}}" alt="Card image cap">
            <div class="card-body">
                <div style="justify-content:space-between; display:flex">
                    <b class="card-title">{{$product->name}}</b>
                    <p class="card-title">{{$product->category->name}}</p>
                </div>
                <p class="card-text">IDR. {{number_format($product->price)}}</p>
                <a href="/DY.ID/details{{$product->id}}" class="btn btn-primary text-black" style="background-color: #E8B200">More Details</a>
            </div>
        </div>
        @endforeach
    </div>
    {{ $products->links('pagination::bootstrap-4') }}
</div>
@endsection