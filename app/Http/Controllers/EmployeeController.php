<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'employees' => Employee::with('department', 'user')->latest()->get(),
        ];
        return view('admin.pages.employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'departments' => Department::latest()->get(),
            'roles'       => Role::latest()->get(),
        ];
        return view('admin.pages.employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required|string|max:255',
            'department'        => 'nullable',
            'designation'       => 'required|string|max:255',
            'salary'            => 'required|numeric',
            'commission'        => 'nullable|numeric',
            'mobile_number'     => 'nullable|string|max:20',
            'birth_date'        => 'nullable|date|date_format:Y-m-d|before:today',
            'appointment_date'  => 'nullable|date|date_format:Y-m-d',
            'joining_date'      => 'required|date|date_format:Y-m-d',
            'gender'            => 'nullable|string',
            'blood_group'       => 'nullable|string',
            'religion'          => 'nullable|string',
            'address'           => 'nullable|string|max:255',
            'email'             => $request->allowLogin == true ? 'required|string|email|max:255|unique:users,email' : 'nullable',
            'password'          => $request->allowLogin == true ? 'required|string|max:255|min:8' : 'nullable',
            'role'              => $request->allowLogin == true ? 'nullable' : 'nullable',
        ]);

        try {
            // generate code
            $code = 1; // Default value
            $lastEmployee = Employee::latest()->first();

            if ($lastEmployee) {
                // Extract the numeric part of the last employee's emp_id (e.g., 'EMP-123' => 123)
                preg_match('/(\d+)$/', $lastEmployee->emp_id, $matches);

                // Increment the numeric value
                $code = (int)$matches[0] + 1;
            }

            $emp_id = 'EMP-' . $code; // Format as EMP-1, EMP-2, etc.
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'employee/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // create a user if allowLogin is true
            if ($request->allowLogin == true) {
                // get role
                // store user
                $user = Admin::create([
                    'name'         => $request->name,
                    'email'        => $request->email,
                    'password'     => Hash::make($request->password),
                    'account_role' => 1,
                ]);
                $user->syncRoles($request->role);
            }

            // create employee
            Employee::create([
                'name'             => $request->name,
                'emp_id'           => $emp_id,
                'department_id'    => $request->department_id,
                'designation'      => $request->designation,
                'salary'           => $request->salary,
                'commission'       => $request->commission,
                'mobile_number'    => $request->mobile_number,
                'birth_date'       => $request->birth_date,
                'gender'           => $request->gender,
                'blood_group'      => $request->blood_group,
                'religion'         => $request->religion,
                'appointment_date' => $request->appointment_date,
                'joining_date'     => $request->joining_date,
                'address'          => $request->address,
                'status'           => $request->status,
                'image'            => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'user_id'          => isset($user) ? $user->id : null,
            ]);

            redirectWithSuccess('Employee Added Successfully');
            return redirect()->route('admin.employee.index');
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
            'employee'    => Employee::findOrFail($id),
            'departments' => Department::latest()->get(),
            'roles'       => Role::latest()->get(),
        ];
        return view('admin.pages.employee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            // generate code
            $code = 1; // Default value
            $lastEmployee = Employee::latest()->first();

            if ($lastEmployee) {
                // Extract the numeric part of the last employee's emp_id (e.g., 'EMP-123' => 123)
                preg_match('/(\d+)$/', $lastEmployee->emp_id, $matches);

                // Increment the numeric value
                $code = (int)$matches[0] + 1;
            }

            $emp_id = 'EMP-' . $code; // Format as EMP-1, EMP-2, etc.
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'employee/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // create a user if allowLogin is true
            if ($request->allowLogin == true) {
                // get role
                // store user
                $user = Admin::create([
                    'name'         => $request->name,
                    'email'        => $request->email,
                    'password'     => Hash::make($request->password),
                    'account_role' => 1,
                ]);
                $user->syncRoles($request->role);
            }

            // create employee
            Employee::create([
                'name'             => $request->name,
                'emp_id'           => $emp_id,
                'department_id'    => $request->department_id,
                'designation'      => $request->designation,
                'salary'           => $request->salary,
                'commission'       => $request->commission,
                'mobile_number'    => $request->mobile_number,
                'birth_date'       => $request->birth_date,
                'gender'           => $request->gender,
                'blood_group'      => $request->blood_group,
                'religion'         => $request->religion,
                'appointment_date' => $request->appointment_date,
                'joining_date'     => $request->joining_date,
                'address'          => $request->address,
                'status'           => $request->status,
                'image'            => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'user_id'          => isset($user) ? $user->id : null,
            ]);

            redirectWithSuccess('Employee Added Successfully');
            return redirect()->route('admin.employee.index');
        } catch (Exception $e) {
            redirectWithError($e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee_login = Admin::where('id', $employee->user_id)->first();
        $files = [
            'image' => $employee->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $employee->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $employee->delete();
        if ($employee_login) {
            $employee_login->delete();
        }

    }
}
