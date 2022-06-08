@extends('layout')
@section('content')
<div class="row" style="justify-content:center">
    <div class="col-sm-3 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Welcome Back</h3>
        <br>
        <form action="{{route('users.loginProcess')}}" method="POST">
            @csrf
            <div class="field-group">
                <input class="form-control" name="email" type="email" placeholder="Email" value="{{Cookie::get('email')}}" />
            </div>
            <br>
            <div class="field-group">
                <input class="form-control" name="password" type="password" placeholder="Password" value="{{Cookie::get('password')}}" />

            </div>
            <br>
            <div class="field-group">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            @if($errors->any())
            <i class="text-danger text-center mt-3">{{$errors->first()}}</i>
            @endif
            <div class="field-group" align="right">
                <div>
                    <button type="submit" name="login" class="btn btn-primary" style="background-color: #E8B200; color:black">Login</button>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection