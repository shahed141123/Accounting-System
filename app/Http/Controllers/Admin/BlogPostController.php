<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogTag;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'blogPosts'=>BlogPost::latest('id')->get(),

        ];
        return view('admin.pages.blogPost.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=[
            'blogTags' => BlogTag::latest('id')->get(['name','id']),
            'blogCategories'=>BlogCategory::latest('id')->get(['name','id']),

        ];
        return view('admin.pages.blogPost.create',$data);
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
        return view('admin.pages.blogPost.edit');
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
