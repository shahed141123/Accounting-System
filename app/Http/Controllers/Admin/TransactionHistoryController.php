<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AccountTransaction;
use App\Http\Controllers\Controller;

class TransactionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view("admin.pages.transactionHistory.create");
    // }
    //return all transactions
    public function index(Request $request)
    {
        $data = [
            'transactions' => AccountTransaction::with('cashbookAccount', 'user')->latest()->get(),
        ];
        return view("admin.pages.transactionHistory.index",$data);
    }

    // search and return transactions
    public function searchTransactions(Request $request)
    {
        $term = $request->term;
        $query = AccountTransaction::with('cashbookAccount', 'user');

        if ($request->startDate && $request->endDate) {
            $query = $query->whereBetween('transaction_date', [$request->startDate, $request->endDate]);
        }

        $query->where(function ($query) use ($term) {
            $query->where('reason', 'LIKE', '%'.$term.'%')
                ->orWhere('amount', 'LIKE', '%'.$term.'%')
                ->orWhereHas('cashbookAccount', function ($newQuery) use ($term) {
                    $newQuery->where('bank_name', 'LIKE', '%'.$term.'%')
                        ->orWhere('branch_name', 'LIKE', '%'.$term.'%')
                        ->orWhere('account_number', 'LIKE', '%'.$term.'%');
                });
        });

        return AccountTransactionResource::collection($query->latest()->paginate($request->perPage));
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
        return view("admin.pages.transactionHistory.edit");
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
