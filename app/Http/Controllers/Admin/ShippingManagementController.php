<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShippingMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ShippingManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'shipping_methods' => ShippingMethod::latest('id')->active()->get(),
        ];
        return view('admin.pages.shippingManagement.index', $data);
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

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:250',
            'location' => 'nullable|string|max:250',
            'duration' => 'nullable|string|max:250',
            'description' => 'nullable|string',
            'carrier' => 'nullable|string|max:250',
            'min_weight' => 'nullable|numeric|min:0',
            'max_weight' => 'nullable|numeric|min:0|gte:min_weight',
            'price' => 'nullable|numeric|min:0',
            'status' => 'nullable|string|in:active,inactive',
        ], [
            'max_weight.gte' => 'The maximum weight must be greater than or equal to the minimum weight.',
            'status.in' => 'The status must be either active or inactive.',
        ]);

        // Check for validation failures
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        // Create a new shipping method
        ShippingMethod::create([
            'title' => $request->title,
            'location' => $request->location,
            'duration' => $request->duration,
            'description' => $request->description,
            'carrier' => $request->carrier,
            'min_weight' => $request->min_weight,
            'max_weight' => $request->max_weight,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Shipping method has been created successfully!');
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
    public function update(Request $request, $id)
    {
        // Find the shipping method or fail
        $shippingMethod = ShippingMethod::findOrFail($id);

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:250',
            'location' => 'nullable|string|max:250',
            'duration' => 'nullable|string|max:250',
            'description' => 'nullable|string',
            'carrier' => 'nullable|string|max:250',
            'min_weight' => 'nullable|numeric|min:0',
            'max_weight' => 'nullable|numeric|min:0|gte:min_weight',
            'price' => 'nullable|numeric|min:0',
            'status' => 'nullable|string|in:active,inactive',
        ], [
            'max_weight.gte' => 'The maximum weight must be greater than or equal to the minimum weight.',
            'status.in' => 'The status must be either active or inactive.',
        ]);

        // Check for validation failures
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        // Update the shipping method
        $shippingMethod->update([
            'title' => $request->title,
            'location' => $request->location,
            'duration' => $request->duration,
            'description' => $request->description,
            'carrier' => $request->carrier,
            'min_weight' => $request->min_weight,
            'max_weight' => $request->max_weight,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Shipping method has been updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
