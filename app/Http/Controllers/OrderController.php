<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
public function viewOrder($id)
{
$order = Order::findOrFail($id);
return view('viewOrder', compact('order'));
}
}
