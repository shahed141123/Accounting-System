<?php

namespace App\Http\Controllers\Admin;

use Exception;

use App\Models\Account;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Models\AccountTransaction;
use App\Models\ExpenseSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'subcategorys' => Expense::latest()->get(),
        ];
        return view('admin.pages.expense.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => ExpenseSubCategory::latest()->get(['id', 'name']),
            'accounts'   => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view('admin.pages.expense.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $this->validate($request, [
            'reason'        => 'nullable|string|max:255',
            'subCategory'   => 'nullable',
            'account'       => 'nullable',
            'amount'        => 'nullable|numeric|max:' . $request->availableBalance,
            'chequeNo'      => 'nullable|string|max:255',
            'voucherNo'     => 'nullable|string|max:255',
            'date'          => 'nullable|date_format:Y-m-d',
            'note'          => 'nullable|string|max:255',
        ]);
        try {
            // upload thumbnail and set the name
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'expense/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            if (!empty($request->sub_cat_id)) {
                $subCategory = ExpenseSubCategory::find($request->sub_cat_id);
                $cat_id = $subCategory ? $subCategory->cat_id : '';
            } else {
                $cat_id = '';
            }




            // store transaction
            $transaction = AccountTransaction::create([
                'account_id'       => $request->account_id,
                'amount'           => $request->amount,
                'reason'           => $request->reason,
                'type'             => 0,
                'transaction_date' => $request->date,
                'cheque_no'        => $request->chequeNo,
                'receipt_no'       => $request->voucherNo,
                'created_by'       => Auth::guard('admin')->user()->id,
                'status'           => $request->status,
            ]);

            // create expense
            Expense::create([
                'name'           => $request->reason,
                'reason'         => $request->reason,
                'sub_cat_id'     => $request->sub_cat_id,
                'cat_id'         => $cat_id,
                'transaction_id' => $transaction->id,
                'date'           => $request->date,
                'created_by'     => Auth::guard('admin')->user()->id,
                'note'           => $request->note,
                'image'          => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'status'         => $request->status,
            ]);
            redirectWithSuccess('Expense Added Successfully');
            return redirect()->route('admin.expense.index');
        } catch (Exception $e) {
            redirectWithError($e->getMessage());
            return redirect()->back()->withInput();
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
        $data = [
            'categories' => ExpenseSubCategory::latest()->get(['id', 'name']),
            'accounts'   => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view('admin.pages.expense.edit',$data);
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
