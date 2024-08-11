<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\Category;
use App\Models\Faq;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\TermsAndCondition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = [
            'categorys'        => Category::orderBy('name','ASC')->active()->get(),
            'latest_products'  => Product::latest('id')->where('status','publish')->get(),
        ];
        return view('frontend.pages.home',$data);
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
            'faqs' => Faq::latest('id')->where('status', 'active')->get(),
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
            'related_products'      => Product::latest('id')->where('status', 'publish')->get(),
        ];
        return view('frontend.pages.productDetails', $data);
    }
    public function categoryProducts($slug)
    {
        $data = [
            'category'       => Category::with('products')->where('slug', $slug)->first(),
            'categorys'      => Category::orderBy('name','ASC')->active()->get(),
        ];
        return view('frontend.pages.categoryDetails', $data);
    }
}
