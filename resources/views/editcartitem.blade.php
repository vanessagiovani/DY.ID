@extends('layout')
@section('content')
<div class="row" style="justify-content:center;">
    @foreach($cart_items as $cart_item)
    <div class="col-sm-9 p-3 border d-flex" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <div style="margin-right: 2%;"><img src="../storage/{{$cart_item->product->photo}}" style="width: 375px; height: px"></div>
        <div>
            <h5>{{$cart_item->product->name}}</h5>
            <br>
            <h6>Category:</h6>
            <p>{{$cart_item->product->category->name}}</p>
            <br>
            <h6>Price:</h6>
            <p>{{$cart_item->product->price}}</p>
            <br>
            <h6>Description:</h6>
            <p>{{$cart_item->product->description}}</p>
            <form action="{{route('users.updateCartItem', $cart_item)}}" method="POST">
                @method('PUT')
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
                        <button type="submit" class="btn btn-warning btn-sm text-black">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection