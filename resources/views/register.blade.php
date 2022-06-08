@extends('layout')
@section('content')
<div class="row" style="justify-content:center">
    <div class="col-sm-9 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Join With Us</h3>
        <br>
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <!-- Full Name -->
            <div class="field-group">
                <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Full Name" value="{{old('name')}}" />
                @error('name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <!-- Gender -->
            <div class="field-group">
                <label class="mb-0 me-4">Gender</label>
                <div>
                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="M" {{ old('gender')=='M' ? 'checked': '' }}>
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>
                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="F" {{ old('gender')=='F' ? 'checked': '' }}>
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
                    @error('gender')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <br>

            <!-- Address -->
            <div class="field-group">
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="3" placeholder="Address" value="{{old('address')}}"></textarea>
                @error('address')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <!-- Email -->
            <div class="field-group">
                <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email" value="{{old('email')}}" />
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <!-- Password -->
            <div class="field-group">
                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" value="{{old('password')}}" />
                @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <!-- Confirm Password -->
            <div class="field-group">
                <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" id="password-confirm" placeholder="Confirm Password" />
                @error('password')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <!-- Terms and Conditions -->
            <div class="field-group">
                <div>
                    <input type="checkbox" name="terms" id="terms" required/>
                    <label for="terms">I agree with terms and conditions</label>
                </div>
            </div>
            <div class="field-group" align="right">
                <div><input type="submit" name="register" value="Register Now" class="btn btn-primary" style="background-color: #E8B200; color:black"></div>
            </div>
        </form>
    </div>
</div>
@endsection