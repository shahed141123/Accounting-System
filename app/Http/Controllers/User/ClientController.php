<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function orderHistory()
    {
        return view('user.pages.orderHistory');
    }
    public function accountDetails()
    {
        return view('user.pages.accountDetails');
    }
    public function quickOrder()
    {
        return view('user.pages.quickOrder');
    }
    public function stockHistory()
    {
        return view('user.pages.stockHistory');
    }
    public function wishlist()
    {
        return view('user.pages.wishlist');
    }
    public function productData()
    {
        return view('user.pages.productData');
    }
    public function viewCatalouge()
    {
        return view('user.pages.viewCatalouge');
    }
}
