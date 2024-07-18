<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cartList()
    {
        $carts = session()->get('cart', []);
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart['quantity'] * $cart['price'];
        }

        return view('cart', compact('carts', 'total'));
    }

    public function addProductToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'poster' => $product->poster
            ];
        }

        session()->put('cart', $cart);

        $totalQuantity = array_sum(array_column($cart, 'quantity'));
        return response()->json(['message' => 'Product added to cart', 'cartCount' => $totalQuantity], 200);
    }

    public function deleteItem($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->flash('success', 'Product successfully deleted.');
        }

        return redirect()->route('cart.list'); // Redirect to cart page after deletion
    }


    public function updateCart(Request $request, $id)
    {
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['quantity'] * $item['price'];
        }

        return response()->json(['total' => $total], 200);
    }

    public function clearCart()
    {
        session()->forget('cart');
        session()->flash('success', 'Cart cleared successfully.');
        return redirect()->route('cart.list');
    }

}
