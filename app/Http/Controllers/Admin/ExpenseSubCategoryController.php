<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Models\ExpenseSubCategory;
use App\Http\Controllers\Controller;

class ExpenseSubCategoryController extends Controller
{
    public function index()
    {
        $data = [
          'categorys'    => ExpenseCategory::latest()->get(['id','name']),
          'subcategorys' => ExpenseSubCategory::latest()->get(),
        ];
        return view('admin.pages.expenseSubCategory.index', $data);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        try {
            $code = generateCode(ExpenseSubCategory::class, 'ESC');
            ExpenseSubCategory::create([
                'name'   => $request->name,
                'code'   => $code,
                'cat_id' => $request->cat_id,
                'note'   => $request->note,
                'status' => $request->status,
            ]);
            redirectWithSuccess('Expense Sub Category Added Successfully');
        } catch (\Exception $e) {
            redirectWithError($e->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        $category = ExpenseSubCategory::findOrFail($id);
        $this->validateRequest($request, $category->id);

        try {
            $category->update($request->only('name', 'cat_id', 'note', 'status'));
            redirectWithSuccess('Expense Sub Category Edited Successfully');
        } catch (\Exception $e) {
            redirectWithError($e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        ExpenseSubCategory::findOrFail($id)->delete();
    }

    private function validateRequest(Request $request, $categoryId = null)
    {
        $uniqueRule = $categoryId ? 'unique:expense_sub_categories,name,' . $categoryId : 'unique:expense_sub_categories';

        $request->validate([
            'name' => 'required|string|max:50|' . $uniqueRule,
            'note' => 'required',
            'note' => 'nullable|string|max:255',
        ]);
    }

}
