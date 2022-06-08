<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        $isValid = auth()->attempt(['email' => $email, 'password' => $password]);

        if($isValid){
            if($remember){
                Cookie::queue('email',$email,300);
                Cookie::queue('password',$password,300);

            }
            return redirect('/DY.ID/home');
        }
        else{
            return back()->withErrors(new MessageBag(['Invalid Email or Password!']));
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/DY.ID/home');
    }
}