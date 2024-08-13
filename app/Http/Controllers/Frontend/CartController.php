<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
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
        try {
            // Find the product or fail
            $product = Product::findOrFail($id);
            $quantity = $request->input('quantity', 1); // Default to 1 if no quantity is provided

            // Add the product to the cart
            Cart::instance('cart')->add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $quantity,
                'price' => $product->box_price
            ])->associate('App\Models\Product');

            // Get the updated cart content

            $data = [
                'cartItems' => Cart::instance('cart')->content(),
                'total'     => Cart::instance('cart')->total(),
                'cartCount' => Cart::instance('cart')->count(),
                'subTotal'  => Cart::instance('cart')->subtotal(),
            ];



            // Return the JSON response with cart data
            return response()->json([
                'success' => 'Successfully added to your cart.',
                'cartCount' => $data['cartCount'],
                'cartHeader' => view('frontend.pages.cart.partials.minicart', $data)->render(),
            ]);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong
            return response()->json([
                'error' => 'Failed to add to your cart. Please try again later.'
            ], 500);
        }
    }
    public function wishListStore(Request $request, $id)
    {
        try {
            // Find the product or fail
            if (Auth::check()) {
                $user = Auth::user();
                $product = Product::findOrFail($id); // Default to 1 if no quantity is provided

                // Add the product to the cart
                Wishlist::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                ]);
                $wishlistCount = Wishlist::where('user_id', $user->id)->count();
                return response()->json([
                    'success' => 'Successfully added to your wishlist.',
                    'wishlistCount' => $wishlistCount,
                ]);
            } else {
                return response()->json([
                    'error' => 'Log in First to add product to your wishlist.'
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to add to your Wishlist. Please try again later.'
            ], 500);
        }
    }
}
