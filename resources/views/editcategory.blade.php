@extends('layout')
@section('content')
<div class="row" style="justify-content:center">
    <div class="col-sm-10 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Edit Category</h3>
        <br>
        <form action="{{route('admin.updateCategory', $category)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $category->name }}">
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-warning mb-2 text-black">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection