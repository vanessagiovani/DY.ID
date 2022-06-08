@extends('layout')
@section('content')
<div class="row" style="justify-content:center">
    <div class="col-sm-10 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Insert New Product</h3>
        <br>
        <form action="{{route('admin.storeProduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="category">Product Category</label>
                <select class="form-select" name="category" id="category">
                    <option disabled selected>Choose One</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{ old('category')== $category->id ? 'selected': '' }}>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="photo">Product Image</label>
                <br>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                @error('photo')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-warning mb-2 text-black">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection