@extends('layout')
@section('content')
<br>
<h3>My Cart</h3>
<div class="row" style="justify-content:center;">
    @forelse($cart_items as $cart_item)
    <div class="col-sm-11 p-3 border d-flex" style="background-color: white; margin-top: 1%; margin-bottom: 1%">
        <div style="margin-right: 2%;"><img src="../storage/{{$cart_item->product->photo}}" alt="Image"></div>
        <div>
            <h5 style="display: inline;">{{$cart_item->product->name}}</h5>
            <p style="display: inline;">(IDR. {{number_format($cart_item->product->price)}})</p>
            <br><br><br>
            <p>x{{$cart_item->quantity}} pcs</p>
            <p>IDR. {{number_format($cart_item->subtotal)}}</p>
            <div class="d-flex">
                <a href="{{route('users.editCartItem', $cart_item)}}" class="btn btn-warning btn-sm text-black" style="margin-right: 5px;">Edit</a>
                <form action="{{route('users.deleteCartItem', $cart_item)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @php
    $totalprice += $cart_item->subtotal;
    $totalquantity += $cart_item->quantity;
    @endphp
    @if($loop->last)
    <form action="{{route('users.checkout')}}" method="POST">
        @csrf
        <div class="d-flex" style="justify-content: space-between;">
            <div>
                <h6 style="display: inline;">Total Price: </h6>
                <p style="display: inline;">IDR. {{number_format($totalprice)}}</p>
                <input type="hidden" id="totalprice" name="totalprice" value="{{$totalprice}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-sm text-black">Check Out ({{$totalquantity}})</button>
            </div>
        </div>
    </form>

    @endif
    @empty
    <h6 align="center">Cart Empty..</h6>
    @endforelse
</div>
@endsection