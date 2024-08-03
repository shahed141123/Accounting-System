<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'blogTags'=>BlogTag::latest('id')->get(),
        ];
        return view('admin.pages.blogTag.index',$data);
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

        DB::beginTransaction();

        try {
            $categoryId = $this->route('category') ?? null;
            $validator = Validator::make($request->all(), [
                'name'         => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('blog_tags', 'name')->ignore($categoryId),
                ],
                'image'       => 'nullable|string',
                'meta_title'  => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'status'      => 'required|in:active,inactive',
            ], [
                'name.required'       => 'The name field is required.',
                'name.string'         => 'The name must be a string.',
                'name.max'            => 'The name may not be greater than :max characters.',
                'name.unique'         => 'This name has already been taken.',
                'image.string'        => 'The image must be a string.',
                'meta_title.string'   => 'The meta title must be a string.',
                'meta_title.max'      => 'The meta title may not be greater than :max characters.',
                'description.string'  => 'The description must be a string.',
                'status.required'     => 'The status field is required.',
                'status.in'           => 'The status must be one of: active, inactive.',
            ]);

            if ($validator->fails()) {
                foreach ($validator->messages()->all() as $message) {
                    Session::flash('error', $message);
                }
                return redirect()->back()->withInput();
            }

            BlogTag::create([
                'name'        => $request->name,
                'slug'        => $request->slug,
                'image'       => $request->image,
                'meta_title'  => $request->meta_title,
                'description' => $request->description,
                'status'      => $request->status,
            ]);

            // toastr()->success('Data has been saved successfully!');
            return redirect()->back()->with('success', 'Data has been saved successfully!');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();

            // Return back with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Category: ' . $e->getMessage());
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
