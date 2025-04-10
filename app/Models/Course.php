<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'cources';
    protected $fillable = [
        'image',
        'name',
        'price',
        'old_price',
        'off',
        'delivery_time',
        'availability',
        'discription',
        
    ];
}
