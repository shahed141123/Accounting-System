<x-admin-app-layout>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-header p-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="text-gray-800">Create Assets</h4>
                                <a href="{{ route('admin.assets.index') }}" class="btn-common-one text-white"
                                    tabindex="0">
                                    <i class="fa-solid fa-arrow-left-long pe-3"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.assets.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="name" class="form-label">Asset Name</x-admin.label>
                                            <x-admin.input type="text" :value="old('name')" id="name"
                                                name="name" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="assetType" class="form-label">Asset Type</label>
                                            <x-admin.select-option id="assetType" name="assetType" :allowClear="true">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="assetCost" class="form-label">Asset Cost</x-admin.label>
                                            <x-admin.input type="number" :value="old('assetCost')" id="assetCost"
                                                name="assetCost" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="depreciation" class="form-label">Depreciation</label>
                                            <x-admin.select-option id="depreciation" name="depreciation"
                                                :allowClear="true">
                                                <option value="1" @selected(old('depreciation') == '1')>Yes</option>
                                                <option value="0" @selected(old('depreciation') == '0')>No</option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-admin.label for="depreciationType" class="form-label">Depreciation Type</x-admin.label>
                                            <x-admin.select-option id="depreciationType" name="depreciationType" :allowClear="true">
                                                <option value="Month"
                                                    {{ old('depreciationType') == 'Month' ? 'selected' : '' }}>Monthly</option>
                                                <option value="Year"
                                                    {{ old('depreciationType') == 'Year' ? 'selected' : '' }}>Yearly
                                                </option>
                                            </x-admin.select-option>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-admin.label for="salvageValue" class="form-label">Salvage Value</x-admin.label>
                                            <x-admin.input type="number" :value="old('salvageValue')" id="salvageValue"
                                                name="salvageValue" required></x-admin.input>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-admin.label for="usefulLife" class="form-label">Salvage Value</x-admin.label>
                                            <x-admin.input type="number" :value="old('usefulLife')" id="usefulLife"
                                                name="usefulLife" required></x-admin.input>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-admin.label for="depreciationExpense" class="form-label">Depreciation</x-admin.label>
                                            <input type="text" :value="old('depreciationExpense')" id="depreciationExpense"
                                                name="depreciationExpense" readonly></input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="mb-3">
                                            <x-admin.label for="date" class="form-label">Date</x-admin.label>
                                            <x-admin.input type="date" :value="old('date')" id="date"
                                                name="date" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="mb-3">
                                            <x-admin.label for="status" class="form-label">Status</x-admin.label>
                                            <x-admin.select-option id="status" name="status" :allowClear="true">
                                                <option value="active"
                                                    {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive"
                                                    {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </x-admin.select-option>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <x-admin.label for="image" class="form-label">Image</x-admin.label>
                                            <x-admin.input type="file" :value="old('image')" id="image"
                                                name="image" required></x-admin.input>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="note" class="form-label">Note</label>
                                            <textarea class="form-control text-area-input" id="note" name="note" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <x-admin.button type="submit" class="">Save Assets <i
                                        class="fa-regular fa-floppy-disk ps-2"></i></x-admin.button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
