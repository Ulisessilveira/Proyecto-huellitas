<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    protected $table = 'sells';
    protected $fillable = [
        'status',
        'ship_tax',
        'id_user'
    ];
}
