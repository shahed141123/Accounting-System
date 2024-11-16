<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Account;
use App\Models\Payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\AccountTransaction;
use App\Http\Controllers\Controller;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'payrolls' => Payroll::with('department', 'user')->latest()->get(),
        ];
        return view("admin.pages.payroll.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'employees'   => Employee::where('status','active')->latest()->get(['id', 'name', 'salary']),
            'accounts'    => Account::latest()->get(['id', 'bank_name', 'account_number']),
        ];
        return view("admin.pages.payroll.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'employee_id'           => 'required',
            'salary_month'          => 'required|string|max:255',
            'chequeNo'              => 'nullable|string|max:255',
            'deduction_amount'      => 'nullable|numeric|min:0',
            'deduction_reason'      => 'nullable',
            'mobileBill'            => 'nullable|numeric|min:0',
            'foodBill'              => 'nullable|numeric|min:0',
            'bonus'                 => 'nullable|numeric|min:0',
            'commission'            => 'nullable|numeric|min:0',
            'festivalBonus'         => 'nullable|numeric|min:0',
            'travelAllowance'       => 'nullable|numeric|min:0',
            'others'                => 'nullable|numeric|min:0',
            'advance'               => 'nullable|numeric|min:0',
            'totalSalary'           => 'required|numeric|min:0|max:' . $request->availableBalance,
            'salaryDate'            => 'nullable|date|date_format:Y-m-d',
            'note'                  => 'nullable|string|max:255',
            'status'                => 'required',
            'image'                 => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Handle file upload for image (if present)
            $imageName = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->storeAs('payrolls', $imageName, 'public');
            }

            $userID = auth()->user()->id;
            $reason = '[' . config('config.employeePrefix') . '-' . $request->employee_id . '] ' . $request->salary_month . ' Payroll sent from [' . $request->account['accountNumber'] . ']';

            // Store the transaction
            $transaction = AccountTransaction::create([
                'account_id'        => $request->account['id'],
                'amount'            => $request->totalSalary,
                'reason'            => $reason,
                'type'              => 0, // Assuming '0' indicates debit
                'cheque_no'         => $request->chequeNo,
                'transaction_date'  => $request->salaryDate,
                'created_by'        => $userID,
                'status'            => $request->status ?? 1, // Default to active if status is not provided
            ]);

            // Store the payroll
            Payroll::create([
                'slug'              => uniqid(),
                'employee_id'       => $request->employee_id,
                'transaction_id'    => $transaction->id,
                'salary_month'      => $request->salary_month,
                'deduction_amount'  => $request->deduction_amount,
                'deduction_reason'  => $request->deduction_reason,
                'mobile_bill'       => $request->mobileBill,
                'food_bill'         => $request->foodBill,
                'bonus'             => $request->bonus,
                'commission'        => $request->commission,
                'advance'           => $request->advance,
                'festival_bonus'    => $request->festivalBonus,
                'travel_allowance'  => $request->travelAllowance,
                'others'            => $request->others,
                'total_salary'      => $request->totalSalary,
                'salary_date'       => $request->salaryDate,
                'created_by'        => $userID,
                'note'              => $request->note,
                'status'            => $request->status ?? 1, // Default to active
                'image'             => $imageName, // Store the image name if available
            ]);

            return $this->responseWithSuccess('Payroll added successfully');
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
        return view("admin.pages.payroll.edit");
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
