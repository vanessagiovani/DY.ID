@extends('layout')
@section('content')
<br>
<h3>Manage Product</h3>
<br>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th style="width: 3%">No</th>
            <th style="width: 12%">Product Image</th>
            <th style="width: 13%">Product Name</th>
            <th style="width: 32%">Product Description</th>
            <th style="width: 10%">Product Price</th>
            <th style="width: 13%">Product Category</th>
            <th style="width: 12%">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="../storage/{{$product->photo}}" alt="Image" width="50%" height="50%"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td>
                <div class="d-flex justify-content-around">
                    <a href="{{route('admin.editProduct', $product)}}" class="btn btn-warning btn-sm text-black">Update</a>
                    <form action="{{route('admin.deleteProduct', $product)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <td colspan="7" class="text-center">No Data</td>
        @endforelse
    </tbody>
</table>
@endsection