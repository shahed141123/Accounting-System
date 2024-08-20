<x-admin-app-layout :title="'Catalogue'">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-dark align-items-center d-flex justify-content-between">
                    <div>
                        <h1 class="mb-0 text-center w-100 text-white">Manage Your Catalogue</h1>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-white rounded-2" data-bs-toggle="modal"
                            data-bs-target="#catelogAdd">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                        fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                        transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            Add Catalogue
                        </a>
                    </div>
                </div>
                <div class="card-body py-0">
                    <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                        <thead class="bg-light-danger">
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>Sl</th>
                                <th>Product Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Attachment</th>
                                <th>URL</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#4585asd</td>
                                <td>Edinburgh Edinburgh Edinburgh</td>
                                <td>
                                    <div>
                                        <img width="100px" class="img-fluid"
                                            src="https://i.ibb.co/0cJBJJ8/logo-white.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <img width="100px" class="img-fluid"
                                            src="https://i.ibb.co/0cJBJJ8/logo-white.png" alt="">
                                    </div>
                                </td>
                                <td>https://i.ibb.co/0cJBJJ8/logo-white</td>
                                <td>
                                    <span class=" badge bg-primary">Active</span>
                                    <span class=" badge bg-danger">Deactive</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}
    <!-- Modal -->
    <div class="modal fade" id="catelogAdd" tabindex="-1" aria-labelledby="catelogAddLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="catelogAddLabel">Create Catalogue</h5>
                    <button class="btn btn-white btn-sm ps-4 pe-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 mb-7">
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-close-on-select="false" data-placeholder="Select an option"
                                    data-allow-clear="true" multiple="multiple" id="product_id" name="product_id"
                                    data-hide-search="false" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-close-on-select="false" data-placeholder="Select an option"
                                    data-allow-clear="true" multiple="multiple" id="category_id" name="category_id"
                                    data-hide-search="false" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-close-on-select="false" data-placeholder="Select an option"
                                    data-allow-clear="true" multiple="multiple" id="brand_id" name="brand_id"
                                    data-hide-search="false" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <div class="col-lg-8 mb-7">
                                <x-metronic.label for="title"
                                    class="col-form-label required fw-bold fs-6">{{ __('Title') }}</x-metronic.label>
                                <x-metronic.input id="title" type="text" name="title"
                                    placeholder="Enter the title" :value="old('title')"></x-metronic.input>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="status"
                                    class="col-form-label fw-bold fs-6 ">{{ __('Status') }}
                                </x-metronic.label>
                                <select class="form-select" name="status" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="approved">Approved</option>
                                    <option value="reject">Reject</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="image"
                                    class="col-form-label fw-bold fs-6 ">{{ __('Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="image" name="image"
                                    :value="old('image')"></x-metronic.file-input>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="attachment"
                                    class="col-form-label fw-bold fs-6 ">{{ __('Attachment (PDF)') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="attachment" name="attachment"
                                    :value="old('attachment')"></x-metronic.file-input>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="url"
                                    class="col-form-label fw-bold fs-6 ">{{ __('URl') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="url" name="url"
                                    :value="old('url')"></x-metronic.file-input>
                            </div>
                            <div class="col-xl-12">
                                <div class="text-end">
                                    <x-metronic.button type="submit" class="dark">
                                        {{ __('Submit') }}
                                    </x-metronic.button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal End --}}
</x-admin-app-layout>
