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
            'total_salary'           => 'required|numeric|min:0|max:' . $request->availableBalance,
            'salaryDate'            => 'nullable|date|date_format:Y-m-d',
            'note'                  => 'nullable|string|max:255',
            'status'                => 'required',
            'image'                 => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Handle file upload for image (if present)
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'payroll/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            $userID = auth()->user()->id;
            $employee = Employee::find($request->employee_id);
            $reason = '[' . $employee->name. '] ' . $request->salary_month . ' Payroll sent from [' . $request->account['accountNumber'] . ']';

            // Store the transaction
            $transaction = AccountTransaction::create([
                'account_id'        => $request->account_id,
                'amount'            => $request->total_salary,
                'reason'            => $reason,
                'type'              => 0, // Assuming '0' indicates debit
                'cheque_no'         => $request->cheque_no,
                'transaction_date'  => $request->salaryDate,
                'created_by'        => $userID,
                'status'            => $request->status, // Default to active if status is not provided
            ]);

            // Store the payroll
            Payroll::create([
                'slug'             => uniqid(),
                'transaction_id'   => $transaction->id,
                'employee_id'      => $request->employee_id,
                'currentSalary'    => $request->currentSalary,
                'salary_month'     => $request->salary_month,
                'deduction_amount' => $request->deduction_amount,
                'deduction_reason' => $request->deduction_reason,
                'mobile_bill'      => $request->mobile_bill,
                'food_bill'        => $request->food_bill,
                'bonus'            => $request->bonus,
                'commission'       => $request->commission,
                'festival_bonus'    => $request->festivalBonus,
                'travel_allowance'  => $request->travelAllowance,
                'others'           => $request->others,
                'advance'          => $request->advance,
                'total_salary'     => $request->total_salary,
                'availableBalance' => $request->availableBalance,
                'image'            => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'chequeNo'         => $request->chequeNo,
                'salary_date'       => $request->salaryDate,
                'status'           => $request->status,
                'note'             => $request->note,
                'created_by'        => $userID,
            ]);

            redirectWithSuccess('Payroll added Successfully');
            return redirect()->route('admin.income.index');
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
