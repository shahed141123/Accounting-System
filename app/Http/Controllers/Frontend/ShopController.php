<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;

class ShopController extends Controller
{
    public function allProducts()
    {
        // $category = Category::where('slug', $slug)->firstOrFail();

        $data = [
            // 'category'                => $category,
            'categories'   => Category::orderBy('name', 'ASC')->active()->get(),
            'brands'       => Brand::orderBy('name', 'ASC')->active()->get(),
            'products'     => Product::latest('id')->active()->paginate(12),
        ];
        return view('frontend.pages.allProducts', $data);
    }
}
