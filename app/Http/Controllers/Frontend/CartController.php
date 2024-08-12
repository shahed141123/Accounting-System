<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart()
    {
        $data = [
            'cartItems' => Cart::instance('cart')->content(),
        ];
        return view('frontend.pages.cart.mycart', $data);
    }
    public function checkout()
    {
        $data = [
            'cartItems' => Cart::instance('cart')->content(),
        ];
        return view('frontend.pages.cart.checkout', $data);
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
        //     return $cartItem->id === $id;
        // });
        $quantity = $request->input('quantity', 1);  // Default to 1 if no quantity is provided

        $cartItem = Cart::instance('cart')->content();
        // dd($cartItem);
        // if ($cartItem->id == $id ) {
        //     return response()->json(['error' => 'This Product Has Already Been Added']);
        // }

        Cart::instance('cart')->add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $quantity,
            'price' => $product->box_price
        ])->associate('App\Models\Product');

        return response()->json(['success' => 'Successfully Added to Your Cart.']);
    }
}
