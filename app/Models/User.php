<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticable{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'gender',
        'address',
        'email',
        'password'
    ];

    public $timestamps = false;

    public function cart(){
        return $this->hasOne(Cart::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}