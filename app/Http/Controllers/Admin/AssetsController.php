<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use Exception;
use Carbon\Carbon;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.assets.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $this->validate($request, [
            'name'          => 'required|string|max:50|unique:assets,name',
            'assetType'     => 'required',
            'assetCost'     => 'required|numeric',
            'depreciation'  => 'required',
            'salvageValue'  => 'required|numeric|min:0|max:'.$request->assetCost,
            'usefulLife'    => $request->depreciation == 1 ? 'required|numeric|min:.1' : '',
            'note'          => 'nullable|string|max:255',
            'date'          => $request->depreciation == 1 ? 'required|date|after_or_equal:today' : 'required',
        ]);
        try {
            // upload thumbnail and set the name
            $files = [
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'assets/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // assign values
            $salvageValue = $request->salvageValue;
            $usefulLife = $request->usefulLife;
            if ($request->depreciation == 1 && $request->depreciationType == 'Month') {
                $depreciationType = 0;
                $duration = $request->usefulLife;
            } elseif ($request->depreciation == 1 && $request->depreciationType == 'Year') {
                $depreciationType = 1;
                $duration = $request->usefulLife * 12;
            } else {
                $depreciationType = $salvageValue = $usefulLife = $dailyDepreciation = $later = null;
            }

            // calculate daily depreciation
            if ($request->depreciation == 1) {
                $earlier = new DateTime($request->date);
                $later = Carbon::parse($earlier)->addMonths($duration);
                $abs_diff = $later->diff($earlier)->format('%a');
                $dailyDepreciation = $request->assetCost / $abs_diff;
            }

            // store asset
            Asset::create([
                'name'               => $request->name,
                'cat_id'             => $request->assetType['id'],
                'asset_cost'         => $request->assetCost,
                'depreciation'       => $request->depreciation,
                'depreciation_type'  => $depreciationType,
                'salvage_value'      => $salvageValue,
                'useful_life'        => $usefulLife,
                'daily_depreciation' => $dailyDepreciation,
                'note'               => $request->note,
                'image_path'         => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'date'               => $request->date,
                'expire_date'        => $later,
                'created_by'         => Auth::guard('admin')->user()->id,
                'status'             => $request->status,
            ]);

            return $this->responseWithSuccess('Asset added successfully');
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
