<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
use HasFactory;

protected $fillable = [
'user_id', 'buyer_id', 'product_id', 'colour', 'size', 'quantity', 'order_date', 'price'
];

public function user()
{
return $this->belongsTo(User::class);
}
}
