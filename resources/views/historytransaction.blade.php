@extends('layout')
@section('content')
<br>
<h3>My History Transaction</h3>
<div class="row" style="justify-content:center;">
    @forelse($historytransaction as $transaction)
    <div class="col-sm-11 p-3 border" style="background-color: white; margin-top: 1%">
        <p>{{$transaction->created_at}}</p>
    </div>
    @foreach($transaction->cart->cartitem as $cart_item)
    <div class="col-sm-11 p-3 border d-flex" style="background-color: white">
        <div style="margin-right: 2%;"><img src="../storage/{{$cart_item->product->photo}}" alt="Image"></div>
        <div>
            <h5 style="display: inline;">{{$cart_item->product->name}}</h5>
            <p style="display: inline;">(IDR. {{number_format($cart_item->product->price)}})</p>
            <br><br><br>
            <p>x{{$cart_item->quantity}} pcs</p>
            <p>IDR. {{number_format($cart_item->subtotal)}}</p>
        </div>
    </div>
    @if($loop->last)
    <div class="col-sm-11 p-3 border" style="background-color: white; margin-bottom: 1%">
        <h6 align="right">Total Price: IDR. {{number_format($transaction->totalprice)}}</h6>
    </div>
    @endif
    @endforeach
    @empty
    <h6 align="center">History Empty..</h6>
    @endforelse
</div>
@endsection