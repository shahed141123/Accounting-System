<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.clients.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("admin.pages.clients.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // generate code
            $code = 1;
            $lastClient = Client::latest()->first();
            if ($lastClient) {
                $code = $lastClient->client_id + 1;
            }

            // upload thumbnail and set the name
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'account/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // create client
            $userSchema = Client::create([
                'name' => $request->name,
                'client_id' => $code,
                'email' => $request->email,
                'phone' => $request->phoneNumber,
                'company_name' => $request->companyName,
                'type' => $request->supplierType,
                'address' => $request->address,
                'status' => $request->status,
                'image_path' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            ]);

            //send welcome notification
            try {
                if ($request->isSendEmail || $request->isSendSMS) {
                    Notification::send($userSchema, new WelcomeNotification($userSchema, [
                        'isSendEmail' => $request->isSendEmail,
                        'isSendSMS' => $request->isSendSMS,
                    ]));
                }
            } catch (Exception $e) {
                //handle email error here if necessary
                throw new Exception($e);
            }

            return $this->responseWithSuccess('Client added successfully');
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
       return view("admin.pages.clients.edit");
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
