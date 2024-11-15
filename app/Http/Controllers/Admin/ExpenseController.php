<?php

namespace App\Http\Controllers\Admin;

use Exception;

use App\Models\User;
use App\Models\Account;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Models\AccountTransaction;
use App\Models\ExpenseSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'expenses' => Expense::with('expSubCategory', 'expCategory', 'expTransaction.cashbookAccount', 'addUser', 'updateUser')->latest()->get(),
        ];
        return view('admin.pages.expense.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => ExpenseSubCategory::latest()->get(['id', 'name']),
            'clients'    => User::latest()->get(['id', 'name']),
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
        $validator = Validator::make($request->all(), [
            'reason'        => 'nullable|string|max:255',
            'subCategory'   => 'nullable',
            'account_id'    => 'required',
            'amount'        => 'nullable|numeric|max:' . $request->availableBalance,
            'chequeNo'      => 'nullable|string|max:255',
            'voucherNo'     => 'nullable|string|max:255',
            'date'          => 'nullable|date_format:Y-m-d',
            'note'          => 'nullable|string|max:255',
        ], [
            'category_id.exists'        => 'The selected category does not exist.',
            'question.required'         => 'The question field is required.',
            'question.string'           => 'The question must be a string.',
            'question.max'              => 'The question may not be greater than :max characters.',
            'account_id.required'       => 'You must choose an account',
            'answer.string'             => 'The answer must be a string.',
            'tag.string'                => 'The tag must be a string.',
            'tag.max'                   => 'The tag may not be greater than :max characters.',
            'order.integer'             => 'The order must be an integer.',
            'order.min'                 => 'The order must be at least :min.',
            'order.unique'              => 'The order value has already been taken.',
            'status.required'           => 'The status field is required.',
            'status.in'                 => 'The status must be one of: active, inactive.',
            'views.integer'             => 'The views must be an integer.',
            'views.min'                 => 'The views must be at least :min.',
            'related_faqs.json'         => 'The related FAQs must be a valid JSON string.',
            'is_featured.boolean'       => 'The is featured field must be true or false.',
            'additional_info.string'    => 'The additional info must be a string.',
        ]);
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }
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
                $cat_id = $subCategory ? $subCategory->cat_id : "";
            } else {
                $cat_id = "";
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
                'client_id'      => $request->client_id,
                'amount'         => $request->amount,
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
            'expense'    => Expense::findOrFail($id),
            'categories' => ExpenseSubCategory::latest()->get(['id', 'name']),
            'accounts'   => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view('admin.pages.expense.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the expense by ID
        $expense = Expense::findOrFail($id);

        // Validate the request
        $this->validate($request, [
            'reason'        => 'nullable|string|max:255',
            'sub_cat_id'    => 'nullable|exists:expense_sub_categories,id',
            'account_id'    => 'nullable|exists:accounts,id',
            'amount'        => 'nullable|numeric|max:' . $request->availableBalance,
            'chequeNo'      => 'nullable|string|max:255',
            'voucherNo'     => 'nullable|string|max:255',
            'date'          => 'nullable|date_format:Y-m-d',
            'note'          => 'nullable|string|max:255',
            'image'         => 'nullable|image|max:2048', // Adjust as necessary
        ]);

        try {
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'expense/' . $key;
                    $oldFile = $account->$key ?? null;

                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Update the transaction
            $transaction = $expense->expTransaction;
            $transaction->update([
                'account_id'       => $request->account_id,
                'amount'           => $request->amount,
                'reason'           => $request->reason,
                'transaction_date' => $request->date,
                'cheque_no'        => $request->chequeNo,
                'receipt_no'       => $request->voucherNo,
                'status'           => $request->status,
            ]);
            if (!empty($request->sub_cat_id)) {
                $subCategory = ExpenseSubCategory::find($request->sub_cat_id);
                $cat_id = $subCategory ? $subCategory->cat_id : '';
            } else {
                $cat_id = '';
            }
            // Update the expense
            $expense->update([
                'name'           => $request->reason,
                'reason'         => $request->reason,
                'client_id'      => $request->client_id,
                'sub_cat_id'     => $request->sub_cat_id,
                'cat_id'         => $cat_id,
                'amount'         => $request->amount,
                'date'           => $request->date,
                'updated_by'     => Auth::guard('admin')->user()->id,
                'note'           => $request->note,
                'image'          => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $expense->image,
                'status'         => $request->status,

            ]);

            redirectWithSuccess('Expense Updated Successfully');
            return redirect()->route('admin.expense.index');
        } catch (Exception $e) {
            // Handle the exception and redirect back with an error message
            redirectWithError($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::where('id', $id)->first();
        $files = [
            'image' => $expense->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $expense->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $expense->delete();
    }

    public function search(Request $request)
    {
        $term = $request->term;
        $query = Expense::with('expSubCategory.expCategory', 'expTransaction.cashbookAccount', 'user');

        if ($request->startDate && $request->endDate) {
            $query = $query->whereBetween('date', [$request->startDate, $request->endDate]);
        }

        $query->where(function ($query) use ($term) {
            $query->where('reason', 'LIKE', '%' . $term . '%')
                ->orWhereHas('expSubCategory', function ($newQuery) use ($term) {
                    $newQuery->where('name', 'LIKE', '%' . $term . '%')
                        ->orWhereHas('expCategory', function ($newQuery) use ($term) {
                            $newQuery->where('name', 'LIKE', '%' . $term . '%');
                        });
                })
                ->orWhereHas('expTransaction', function ($newQuery) use ($term) {
                    $newQuery->where('amount', 'LIKE', '%' . $term . '%')
                        ->orWhereHas('cashbookAccount', function ($newQuery) use ($term) {
                            $newQuery->where('account_number', 'LIKE', '%' . $term . '%');
                        });
                });
        });

        // return ExpenseResource::collection($query->latest()->paginate($request->perPage));
    }
    public function expenseFilter(Request $request)
    {
        // Get the start and end date from the request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // If no date filter is provided, fetch all transactions
        if (!$startDate || !$endDate) {
            $expenses = Expense::with('client', 'expTransaction')
                ->latest()
                ->get();
        } else {
            // Query to filter the expenses based on the date range
            $expenses = Expense::with('client', 'expTransaction')
                ->whereBetween('date', [$startDate, $endDate])
                ->latest()
                ->get();
        }

        // Return a view fragment (HTML table rows)
        return response()->view('admin.pages.expense.filter_table', compact('expenses'));
    }
}
