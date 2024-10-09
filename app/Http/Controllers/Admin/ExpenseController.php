<?php

namespace App\Http\Controllers\Admin;

use Exception;

use Illuminate\Http\Request;
use App\Models\AccountTransaction;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.expense.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.expense.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $this->validate($request, [
            'reason' => 'required|string|max:255',
            'subCategory' => 'required',
            'account' => 'required',
            'amount' => 'required|numeric|max:' . $request->availableBalance,
            'chequeNo' => 'nullable|string|max:255',
            'voucherNo' => 'nullable|string|max:255',
            'date' => 'nullable|date_format:Y-m-d',
            'note' => 'nullable|string|max:255',
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
            $userId = auth()->user()->id;
            $reason = '[' . config('config.expSubCatPrefix') . '-' . $request->subCategory['code'] . '] Expense payment';

            // store transaction
            $transaction = AccountTransaction::create([
                'account_id' => $request->account['id'],
                'amount' => $request->amount,
                'reason' => $reason,
                'type' => 0,
                'transaction_date' => $request->date,
                'cheque_no' => $request->chequeNo,
                'receipt_no' => $request->voucherNo,
                'created_by' => $userId,
                'status' => $request->status,
            ]);

            // create expense
            Expense::create([
                'reason' => $request->reason,
                'sub_cat_id' => $request->subCategory['id'],
                'transaction_id' => $transaction->id,
                'date' => $request->date,
                'created_by' => $userId,
                'note' => clean($request->note),
                'image_path' => $imageName,
                'status' => $request->status,
            ]);

            return $this->responseWithSuccess('Expense added successfully');
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
        return view('admin.pages.expense.edit');
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
