@extends('layout')
@section('content')
<div class="row" style="justify-content:center;">
    @foreach($products as $product)
    <div class="col-sm-9 p-3 border d-flex" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <div style="margin-right: 2%;"><img src="../storage/{{$product->photo}}" style="width: 375px; height: px"></div>
        <div>
            <h5>{{$product->name}}</h5>
            <br>
            <h6>Category:</h6>
            <p>{{$product->category}}</p>
            <br>
            <h6>Price:</h6>
            <p>IDR. {{number_format($product->price)}}</p>
            <br>
            <h6>Description:</h6>
            <p>{{$product->description}}</p>
            @auth
            @if(auth()->user()->role == 'admin')
            @endif
            @if(auth()->user()->role == 'member')
            <form action="{{route('users.storeCartItem', $product)}}" method="POST">
                @csrf
                <div class="d-flex">
                    <div class="form-group" style="margin-right: 5px;">
                        <label for="quantity">Qty: </label>
                        <input type="text" class="field-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}">
                        @error('quantity')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-sm text-black">Add To Cart</button>
                    </div>
                </div>
            </form>
            @endif
            @else
            <a href="/DY.ID/login" class="btn btn-primary text-black" style="background-color: #E8B200">Login to buy</a>
            @endauth
        </div>
    </div>
    @endforeach
</div>
@endsection