@extends('layout')
@section('content')
<br>
<h3>Manage Category</h3>
<br>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th style="width: 3%">No</th>
            <th>Category Name</th>
            <th style="width: 12%">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$category->name}}</td>
            <td>
                <div class="d-flex justify-content-around">
                    <a href="{{route('admin.editCategory', $category)}}" class="btn btn-warning btn-sm text-black">Update</a>
                    <form action="{{route('admin.deleteCategory', $category)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <td colspan="3" class="text-center">No Data</td>
        @endforelse
    </tbody>
</table>
@endsection