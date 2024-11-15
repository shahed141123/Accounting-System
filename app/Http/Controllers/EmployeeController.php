<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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
            'departments' => Employee::with('department', 'user')->latest()->get(),
        ];
        return view('admin.pages.employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'employeeName' => 'required|string|max:255',
            'department' => 'required',
            'designation' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'commission' => 'nullable|numeric',
            'mobileNumber' => 'required|string|max:20',
            'birthDate' => 'required|date|date_format:Y-m-d|before:today',
            'appointmentDate' => 'required|date|date_format:Y-m-d',
            'joiningDate' => 'required|date|date_format:Y-m-d',
            'gender' => 'required|string',
            'bloodGroup' => 'nullable|string',
            'religion' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'email' => $request->allowLogin == true ? 'required|string|email|max:255|unique:users,email' : 'nullable',
            'password' => $request->allowLogin == true ? 'required|string|max:255|min:8' : 'nullable',
            'role' => $request->allowLogin == true ? 'required' : 'nullable',
        ]);

        try {
            // generate code
            $code = 1;
            $lastEmployee = Employee::latest()->first();
            if ($lastEmployee) {
                $code = $lastEmployee->emp_id + 1;
            }

            // upload thumbnail and set the name
            $imageName = '';
            if ($request->image) {
                $imageName = time().'.'.explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                Image::make($request->image)->save(public_path('images/employees/').$imageName);
            }

            // create a user if allowLogin is true
            if ($request->allowLogin == true) {
                // get role
                $role = Role::where('slug', $request->role['slug'])->first();
                // store user
                $user = User::create([
                    'name' => $request->employeeName,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'account_role' => 0,
                ]);
                $user->roles()->attach($role->id);
                $user->permissions()->attach($user->roles[0]->permissions);
            }

            // create employee
            Employee::create([
                'name' => $request->employeeName,
                'emp_id' => $code,
                'department_id' => $request->department['id'],
                'designation' => $request->designation,
                'salary' => $request->salary,
                'commission' => $request->commission,
                'mobile_number' => $request->mobileNumber,
                'birth_date' => $request->birthDate,
                'gender' => $request->gender,
                'blood_group' => $request->bloodGroup,
                'religion' => $request->religion,
                'appointment_date' => $request->appointmentDate,
                'joining_date' => $request->joiningDate,
                'address' => $request->address,
                'status' => $request->status,
                'image_path' => $imageName,
                'user_id' => isset($user) ? $user->id : null,
            ]);

            return $this->responseWithSuccess('Employee added successfully');
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
        //
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
