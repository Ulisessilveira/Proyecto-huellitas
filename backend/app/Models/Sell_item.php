<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell_item extends Model
{
    use HasFactory;
    protected $table = 'sell_items';
    protected $fillable = [
        'price',
        'quantity',
        'id_sell',
        'id_product'
    ];
}
