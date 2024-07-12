<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
use HasFactory;

protected $fillable = [
 'buyer_id', 'product_id', 'colour', 'size', 'quantity', 'price','SN'
];

public function user()
{
return $this->belongsTo(User::class);
}
}
