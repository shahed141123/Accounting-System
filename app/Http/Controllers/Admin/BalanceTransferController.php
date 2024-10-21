<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\BalanceTransfer;
use App\Models\AccountTransaction;
use App\Http\Controllers\Controller;

class BalanceTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.balanceTransfer.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.balanceTransfer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'transferReason'    => 'required|string|max:255',
            'fromAccount'       => 'required',
            'toAccount'         => 'required|different:fromAccount',
            'amount'            => 'required|numeric|min:1|max:'.$request->availableBalance,
            'date'              => 'nullable|date_format:Y-m-d',
            'note'              => 'nullable|string|max:255',
        ]);

        try {
            // get logged in user id
            $userId = auth()->user()->id;
            $fromAccountNumber = $request->fromAccount['accountNumber'];
            $debitReason = "Balance transfer from [$fromAccountNumber]";
            // store debit transaction
            $debitTransaction = AccountTransaction::create([
                'account_id'       => $request->fromAccount['id'],
                'amount'           => $request->amount,
                'reason'           => $debitReason,
                'type'             => 0,
                'transaction_date' => $request->date,
                'created_by'       => $userId,
                'status'           => $request->status,
            ]);

            $toAccountNumber = $request->toAccount['accountNumber'];
            $creditReason = "Balance transfer to [$toAccountNumber]";
            // store credit transaction
            $creditTransaction = AccountTransaction::create([
                'account_id'       => $request->toAccount['id'],
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

            return $this->responseWithSuccess('Transfer added successfully');
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
        return view("admin.pages.balance-transfer.create");
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
