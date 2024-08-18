<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function orderHistory()
    {
        $data = [

            'pendingOrdersCount' => Order::where('status','pending')->count(),
            'deliveredOrdersCount' => Order::where('status','delivered')->count(),
            'orders' => Order::with('orderItems')->where('user_id' , Auth::user()->id)->latest('created_at')->get(),
        ];
        return view('user.pages.orderHistory',$data);
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
        $data = [
            'wishlists' => Wishlist::with('product')->where('user_id' , Auth::user()->id)->latest('id')->get(),
        ];
        return view('user.pages.wishlist',$data);
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
