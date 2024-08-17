<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'model',
        'price',
        'created_at',
        'updated_at'
    ];
}
