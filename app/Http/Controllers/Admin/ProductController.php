<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->buildCategories(Category::active()->get());
        $categoriesOptions = $this->buildCategoriesOptions($categories);
        $data = [
            'brands'     => DB::table('brands')->select('id', 'name')->latest('id')->get(),
            'categoriesOptions' => $categoriesOptions,
        ];
        return view('admin.pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        DB::beginTransaction();

        try {
            // Handle the file upload for the thumbnail
            $files = [
                'thumbnail' => $request->file('thumbnail'),
                'images' => $request->file('images'), // Handle multiple images
            ];

            $uploadedFiles = [];

            // Process single file uploads
            foreach (['thumbnail'] as $key) {
                $file = $files[$key] ?? null;
                if ($file) {
                    $filePath = 'product/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create a new product record
            $product = Product::create([
                'name'                      => $request->input('name'),
                'sku_code'                  => $request->input('sku_code'),
                'mf_code'                   => $request->input('mf_code'),
                'product_code'              => $request->input('product_code'),
                'barcode_id'                => $request->input('barcode_id'),
                'tags'                      => $request->input('tags'),
                'color'                     => $request->input('color'),
                'short_description'         => $request->input('short_description'),
                'overview'                  => $request->input('overview'),
                'description'               => $request->input('description'),
                'specification'             => $request->input('specification'),
                'warranty'                  => $request->input('warranty'),
                'thumbnail'                 => $uploadedFiles['thumbnail']['status'] == 1 ? $uploadedFiles['thumbnail']['file_path'] : null,
                'box_stock'                 => $request->input('box_stock'),
                'stock'                     => $request->input('stock'),
                'box_contains'              => $request->input('box_contains'),
                'box_price'                 => $request->input('box_price'),
                'box_discount_price'        => $request->input('box_discount_price'),
                'unit_price'                => $request->input('unit_price'),
                'unit_discount_price'       => $request->input('unit_discount_price'),
                'discount'                  => $request->input('discount'),
                'deal'                      => $request->input('deal'),
                'is_refurbished'            => $request->input('is_refurbished'),
                'product_type'              => $request->input('product_type'),
                'category_id'               => $request->input('category_id'),
                'brand_id'                  => $request->input('brand_id'),
                'create_date'               => $request->input('create_date'),
                'action_status'             => $request->input('action_status'),
                'added_by'                  => $request->input('added_by'),
                'status'                    => $request->input('status'),
            ]);

            // Handle multiple image uploads
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('product_images', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'photo'      => $imagePath,
                        'created_by' => auth()->id(), // Assuming you want to store who created the image
                    ]);
                }
            }

            DB::commit();

            // Redirect with success message
            return redirect()->route('admin.products.index')->with('success', 'Product has been created successfully!');
        } catch (\Exception $e) {
            DB::rollback();

            // Handle file deletion if needed
            if (isset($uploadedFiles['thumbnail']['file_path'])) {
                Storage::delete("public/" . $uploadedFiles['thumbnail']['file_path']);
            }

            // Redirect with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the product: ' . $e->getMessage());
        }
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
        return view('admin.pages.product.edit');
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

    private function buildCategories($categories, $parentId = null)
    {
        $result = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildCategories($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                }

                $result[] = $category;
            }
        }

        return $result;
    }

    private function buildCategoriesOptions($selectedId = null, $excludeId = null, $parentId = null, $prefix = '')
    {
        $categories = Category::active()->where('parent_id', $parentId)->where('id', '!=', $excludeId)->get();
        $options = '';

        foreach ($categories as $category) {
            $selected = $category->id == $selectedId ? 'selected' : '';
            $options .= '<option value="' . $category->id . '" ' . $selected . '>' . $prefix . $category->name . '</option>';
            $options .= $this->buildCategoriesOptions($selectedId, $excludeId, $category->id, $prefix . '--');
        }

        return $options;
    }
}
