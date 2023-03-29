<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'rewiews';
    protected $fillable = [
        'calification',
        'id_user',
        'id_product'
    ];
}
