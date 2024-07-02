<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'categories',
        'subcategories',
        'color',
        'tag',
        'brand',
        'imageone',
        'imagetwo',
        'imagethre',
        'imagefour',
        'description',
        'price',
        'quantity',
        'size',
        'filter',
    ];
}
