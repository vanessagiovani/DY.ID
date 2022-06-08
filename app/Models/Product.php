<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'price',
        'category_id',
        'photo'
    ];

    public $timestamps = false;

    public function cartitem(){
        return $this->hasMany(CartItem::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}