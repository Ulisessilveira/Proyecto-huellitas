<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_product extends Model
{
    use HasFactory;
    protected $table = 'cart_products';
    protected $fillable = [
        'id_user',
        'id_product',
        'quantity'
    ];
}
