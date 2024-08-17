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
            'products'     => Product::latest('id')->active()->paginate(10),
            // 'productCount' => Product::active()->count(),
        ];
        return view('frontend.pages.product.allProducts', $data);
    }

    public function filter(Request $request)
    {
        $query = Product::query();

        // Apply filters
        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }

        if ($request->has('subcategories')) {
            $query->whereIn('subcategory_id', $request->subcategories);
        }

        if ($request->has('brands')) {
            $query->whereIn('brand_id', $request->brands);
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereBetween('price', [$request->price_min, $request->price_max]);
        }

        // Apply sorting
        switch ($request->sort_by) {
            case 'popularity':
                $query->orderBy('popularity', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            case 'price-asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        // Apply pagination
        $perPage = $request->get('show_per_page', 12);
        $products = $query->paginate($perPage);

        // Return a view with products and pagination
        return response()->json([
            'products' => view('frontend.pages.product.partial.getProduct', compact('products'))->render(),
            'pagination' => $products->links()->render()
        ]);
    }
}
