@extends('layout')
@section('content')
<div class="row" style="justify-content:center">
    <div class="col-sm-10 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Edit Product</h3>
        <br>
        <form action="{{route('admin.updateProduct', $product)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $product->name }}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description') ?? $product->description }}</textarea>
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $product->price }}">
                @error('price')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="category_id">Product Category</label>
                <select class="form-select" name="category_id" id="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{ old('category') ?? $product->category_id == $category->id ? 'selected': '' }}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="photo">Product Image</label>
                <br>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                @error('photo')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <br>
                <label>Image saved: {{ old('photo') ?? $product->photo }}</label>
            </div>
            <br>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-warning mb-2 text-black">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection