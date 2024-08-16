<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'orders' => Order::with('orderItems')->latest('created_at')->get(),
        ];
        return view('admin.pages.orderManagement.index', $data);
    }

    public function orderReport()
    {

        $data = [
            'orders' => Order::with('orderItems')->latest('created_at')->get(),
            'pendingOrdersCount' => Order::pending()->count(),
            'processingOrdersCount' => Order::processing()->count(),
            'shippedOrdersCount' => Order::shipped()->count(),
            'deliveredOrdersCount' => Order::delivered()->count(),
            'cancelledOrdersCount' => Order::cancelled()->count(),
            'returnedOrdersCount' => Order::returned()->count(),
        ];
        return view('admin.pages.orderManagement.orderReport', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
