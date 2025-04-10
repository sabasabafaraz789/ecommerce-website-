<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hireus extends Model
{
    use HasFactory;
    protected $table = 'hire_us';
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
