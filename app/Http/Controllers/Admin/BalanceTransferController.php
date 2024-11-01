<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\BalanceTransfer;
use App\Models\AccountTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BalanceTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'transfers' => BalanceTransfer::with('debitTransaction.cashbookAccount', 'creditTransaction.cashbookAccount', 'addUser')->latest()->get(),
        ];
        return view("admin.pages.balanceTransfer.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'accounts'   => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view("admin.pages.balanceTransfer.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'transferReason'    => 'nullable|string|max:255',
            'fromAccount'       => 'nullable',
            'toAccount'         => 'nullable|different:fromAccount',
            'amount'            => 'nullable|numeric|min:1|max:' . $request->availableBalance,
            'date'              => 'nullable|date_format:Y-m-d',
            'note'              => 'nullable|string|max:255',
        ]);

        try {
            // get logged in user id
            $userId = Auth::guard('admin')->user()->id;
            $fromAccount = Account::find($request->fromAccount);
            $toAccount = Account::find($request->fromAccount);
            $fromAccountNumber = $fromAccount->account_number;
            $debitReason = "Balance transfer from [$fromAccountNumber]";
            // store debit transaction
            $debitTransaction = AccountTransaction::create([
                'account_id'       => $request->fromAccount,
                'amount'           => $request->amount,
                'reason'           => $debitReason,
                'type'             => 0,
                'transaction_date' => $request->date,
                'created_by'       => $userId,
                'status'           => $request->status,
            ]);

            $toAccountNumber = $toAccount->account_number;;
            $creditReason = "Balance transfer to [$toAccountNumber]";
            // store credit transaction
            $creditTransaction = AccountTransaction::create([
                'account_id'       => $request->toAccount,
                'amount'           => $request->amount,
                'reason'           => $creditReason,
                'type'             => 1,
                'transaction_date' => $request->date,
                'created_by'       => $userId,
                'status'           => $request->status,
            ]);

            // create transfer
            BalanceTransfer::create([
                'reason'     => $request->transferReason,
                'debit_id'   => $debitTransaction->id,
                'credit_id'  => $creditTransaction->id,
                'amount'     => $request->amount,
                'date'       => $request->date,
                'note'       => $request->note,
                'status'     => $request->status,
                'created_by' => $userId,
            ]);

            redirectWithSuccess('Transfer added Successfully');
            return redirect()->route('admin.balance-transfer.index');
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
            'transfer'   => BalanceTransfer::findOrFail($id),
            'accounts'   => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view("admin.pages.balanceTransfer.edit", $data);
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
