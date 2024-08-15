<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\ShippingMethod;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

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
            // Check if user is authenticated
            if (!Auth::check()) {
                return response()->json([
                    'error' => 'Log in first to add product to your wishlist.'
                ]); // Use 401 Unauthorized status code for unauthenticated users
            }

            $user = Auth::user();
            $product = Product::find($id);

            if (!$product) {
                return response()->json([
                    'error' => 'Product not found.'
                ]); // Use 404 Not Found status code for non-existent products
            }

            // Check if the product is already in the user's wishlist
            $wishlistExists = Wishlist::where('product_id', $id)
                ->where('user_id', $user->id)
                ->exists();

            if ($wishlistExists) {
                return response()->json([
                    'error' => 'The Product is already in your wishlist.'
                ]); // Use 400 Bad Request status code for conflicts
            }

            // Add the product to the wishlist
            Wishlist::create([
                'product_id' => $id,
                'user_id' => $user->id,
            ]);

            $wishlistCount = Wishlist::where('user_id', $user->id)->count();

            return response()->json([
                'success' => 'Successfully added to your wishlist.',
                'wishlistCount' => $wishlistCount,
            ], 200); // Use 200 OK status code for successful operations

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage(),
            ], 500); // Use 500 Internal Server Error status code for unexpected errors
        }
    }


    public function removeFromCart(Request $request)
    {
        $rowId = $request->input('rowId');

        if ($rowId) {
            // Assuming you're using Hardevine Cart
            Cart::instance('cart')->remove($rowId);

            $data = [
                'cartItems' => Cart::instance('cart')->content(),
                'total'     => Cart::instance('cart')->total(),
                'cartCount' => Cart::instance('cart')->count(),
                'subTotal'  => Cart::instance('cart')->subtotal(),
            ];
            return response()->json([
                'success' => 'Cart Item removed Successfully.',
                'cartCount' => $data['cartCount'],
                'cartHeader' => view('frontend.pages.cart.partials.minicart', $data)->render(),
                'cartTable' => view('frontend.pages.cart.partials.cartTable', $data)->render(),
            ]);
        }

        return response()->json(['error' => 'Unable to remove item.'], 400);
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'billing_email' => 'required|email',
            'billing_first_name' => 'required|string|max:255',
            'billing_last_name' => 'required|string|max:255',
            'billing_address_1' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
            'billing_postcode' => 'required|string|max:20',
            'billing_phone' => 'required|string|max:20',
            'shipping_first_name' => 'nullable|string|max:255',
            'shipping_last_name' => 'nullable|string|max:255',
            'shipping_address_1' => 'nullable|string|max:255',
            'shipping_city' => 'nullable|string|max:255',
            'shipping_postcode' => 'nullable|string|max:20',
            'shipping_phone' => 'nullable|string|max:20',
            'order_note' => 'nullable|string',
            'payment_method' => 'required|in:cod,stripe,paypal',
            'total_amount' => 'required|numeric|min:0',
            'shipping_id' => 'required|exists:shipping_methods,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            // Create the order
            $order = Order::create([
                'order_number' => 'ORD-' . strtoupper(uniqid()), // Generate a unique order number
                'user_id' => auth()->id(), // Assuming user is logged in
                'shipping_method_id' => $request->input('shipping_id'),
                'sub_total' => Cart::instance('cart')->subtotal(), // Use Cart instance
                'coupon' => $request->input('coupon', 0),
                'discount' => $request->input('discount', 0),
                'total_amount' => $request->input('total_amount'),
                'quantity' => Cart::instance('cart')->count(), // Total quantity of items in cart
                'shipping_charge' => ShippingMethod::find($request->input('shipping_id'))->price,
                'payment_method' => $request->input('payment_method'),
                'payment_status' => 'unpaid',
                'status' => 'pending',
                'shipped_to_different_address' => $request->has('ship-address') ? 'yes' : 'no',
                'billing_first_name' => $request->input('billing_first_name'),
                'billing_last_name' => $request->input('billing_last_name'),
                'billing_email' => $request->input('billing_email'),
                'billing_phone' => $request->input('billing_phone'),
                'billing_address' => $request->input('billing_address_1') . ', ' . $request->input('billing_address_2'),
                'billing_zipcode' => $request->input('billing_postcode'),
                'billing_state' => $request->input('billing_county'),
                'billing_country' => $request->input('billing_country', 'UK'),
                'shipping_first_name' => $request->input('shipping_first_name', $request->input('billing_first_name')),
                'shipping_last_name' => $request->input('shipping_last_name', $request->input('billing_last_name')),
                'shipping_email' => $request->input('shipping_email', $request->input('billing_email')),
                'shipping_phone' => $request->input('shipping_phone', $request->input('billing_phone')),
                'shipping_address' => $request->input('shipping_address_1', $request->input('billing_address_1')) . ', ' . $request->input('shipping_address_2', $request->input('billing_address_2')),
                'shipping_zipcode' => $request->input('shipping_postcode', $request->input('billing_postcode')),
                'shipping_state' => $request->input('shipping_county', $request->input('billing_county')),
                'shipping_country' => $request->input('shipping_country', $request->input('billing_country')),
                'order_note' => $request->input('order_note'),
                'created_by' => auth()->id(), // Optional: user who created the order
            ]);

            // Add items to order_items table
            foreach (Cart::instance('cart')->content() as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'user_id' => auth()->id(), // Assuming user is logged in
                    'product_name' => $item->name,
                    'product_color' => $item->options->color ?? null,
                    'product_sku' => $item->options->sku ?? null,
                    'price' => $item->price,
                    'tax' => $item->tax ?? 0, // Assuming tax is an option
                    'quantity' => $item->qty,
                    'subtotal' => $item->subtotal()
                ]);
            }

            // Commit the transaction
            DB::commit();

            // Clear the cart after successful order
            Cart::instance('cart')->destroy();

            // Redirect to a confirmation page or thank you page
            return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction on error
            DB::rollback();

            // Log the error or handle it as needed
            \Log::error('Order creation failed: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput();
        }
    }
}
