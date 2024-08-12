<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart() {
        $data =[
            'cartItems' => Cart::instance('cart')->content(),
        ];
        return view('frontend.pages.cart.mycart',$data);
    }
}
