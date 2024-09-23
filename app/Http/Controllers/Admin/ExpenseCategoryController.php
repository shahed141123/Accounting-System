<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Exception;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'categorys' => ExpenseCategory::latest()->get(),
        ];
        return view('admin.pages.expenseCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.expenseCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:expense_categories',
            'note' => 'nullable|string|max:255',
        ]);

        try {
            // generate code
            $code = 1;
            $prevCode = ExpenseCategory::latest()->first();
            if ($prevCode) {
                $code = $prevCode->code + 1;
            }

            // save category
            ExpenseCategory::create([
                'name' => $request->name,
                'code' => $code,
                'note' => $request->note,
                'status' => $request->status,
            ]);

            return $this->responseWithSuccess('Category added successfully');
        } catch (Exception $e) {
            return $this->responseWithError($e->getMessage());
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
        return view('admin.pages.expenseCategory.edit');
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
