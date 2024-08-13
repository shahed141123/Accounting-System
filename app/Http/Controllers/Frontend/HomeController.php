<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\BlogTag;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function home()
    {
        // $latest_products = Product::latest('id')->where('status','published')->get(['slug','meta_title','name','box_discount_price','box_price']);

        $data = [
            'blog'             => BlogPost::inRandomOrder()->active()->first(),
            'categorys'        => Category::orderBy('name', 'ASC')->active()->get(),
            'latest_products'  => Product::select('id', 'slug', 'meta_title', 'thumbnail', 'name', 'box_discount_price', 'box_price')->with('multiImages')->latest('id')->where('status', 'published')->limit(10)->get(),
            'deal_products'    => Product::select('id', 'slug', 'meta_title', 'thumbnail', 'name', 'box_discount_price', 'box_price')->with('multiImages')->whereNotNull('box_discount_price')->where('status', 'published')->latest('id')->limit(10)->get(),
        ];
        // dd($data['deal_products']);
        return view('frontend.pages.home', $data);
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function aboutUs()
    {
        return view('frontend.pages.aboutUs');
    }
    public function returnPolicy()
    {
        return view('frontend.pages.returnPolicy');
    }
    public function privacyPolicy()
    {
        $data = [
            'privacy' => PrivacyPolicy::latest('id')->where('status', 'active')->first(),
        ];
        return view('frontend.pages.privacyPolicy', $data);
    }
    public function termsCondition()
    {
        $data = [
            'terms' => TermsAndCondition::latest('id')->where('status', 'active')->first(),
        ];
        return view('frontend.pages.termsCondition', $data);
    }
    public function faq()
    {
        $data = [
            'faqs' => Faq::orderBy('order', 'asc')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.faq', $data);
    }
    public function allBlog()
    {
        $data = [
            'blog_posts'     => BlogPost::latest('id')->where('status', 'publish')->get(),
            'blog_categorys' => BlogCategory::latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogTag::latest('id')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.blog.allBlog', $data);
    }
    public function blogDetails($slug)
    {
        $data = [
            'blog'     => BlogPost::where('slug', $slug)->first(),
            'blog_categorys' => BlogCategory::latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogTag::latest('id')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.blog.blogDetails', $data);
    }
    public function productDetails($slug)
    {
        $data = [
            'product'               => Product::where('slug', $slug)->first(),
            'related_products'      => Product::latest('id')->where('status', 'published')->get(),
        ];
        return view('frontend.pages.productDetails', $data);
    }
    public function categoryProducts($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $data = [
            'category'                => $category,
            'category_products '      => $category->products()->paginate(12),
            'categories'              => Category::orderBy('name', 'ASC')->active()->get(),
        ];
        return view('frontend.pages.categoryDetails', $data);
    }
    public function allProducts()
    {
        // $category = Category::where('slug', $slug)->firstOrFail();

        $data = [
            // 'category'                => $category,
            'categories'   => Category::orderBy('name', 'ASC')->active()->get(),
        ];
        return view('frontend.pages.allProducts', $data);
    }
    public function compareList()
    {

        $data = [
            'categories'   => Category::orderBy('name', 'ASC')->active()->get(),
        ];
        return view('frontend.pages.cart.compareList', $data);
    }

    // CartController.php
    
}
