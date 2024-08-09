<x-admin-app-layout :title="'Category Management'">
    <div class="row">
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i class="fa-solid text-white fa-list fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Category
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">03 Aug 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-flush mt-10">
        <div class="card-header bg-success align-items-center">
            <h3 class="card-title">Mange & Create Your Category</h3>
            <div>
                <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal"
                    data-bs-target="#CategoryMethodsEdit">
                    <i class="fa-solid fa-plus"></i> Create
                </button>

                <div class="modal fade" id="CategoryMethodsEdit" tabindex="-1" aria-labelledby="CategoryMethodsEditLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="CategoryMethodsEditLabel">Category Methods</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
                                    <div class="fv-row mb-10">
                                        <label class="fw-semibold fs-6 mb-2">Title</label>
                                        <input type="text" name="title"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="Super Fast Delivery" />
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="fw-semibold fs-6 mb-2">Zone</label>
                                        <input type="text" name="zone"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="ASIA" />
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="fw-semibold fs-6 mb-2">Cost</label>
                                        <input type="text" name="cost"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="$5661" />
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="fw-semibold fs-6 mb-2">Status</label>
                                        <select class="form-select" name="status" data-control="select2"
                                            data-placeholder="Select an option">
                                            <option></option>
                                            <option value="1">Active</option>
                                            <option value="2">Deactive</option>
                                        </select>
                                    </div>
                                    <button id="kt_docs_formvalidation_text_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">Validation Form</span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_category_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-150px">{{ __('category.Sl') }}</th>
                        <th class="min-w-150px">{{ __('category.Name') }}</th>
                        <th class="min-w-150px">{{ __('category.Slug') }}</th>
                        <th class="min-w-150px">{{ __('category.Status') }}</th>
                        <th class="min-w-150px">{{ __('category.Parent') }}</th>
                        <th class="text-end min-w-70px">{{ __('category.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td>
                                <span class="fw-bolder">{{ $loop->iteration }}</span>
                            </td>
                            <td>
                                <span class="fw-bolder"> {{ $category->name }}</span>
                            </td>
                            <td>
                                <span class="fw-bolder"> {{ $category->slug }}</span>
                            </td>
                            <td>
                                <div
                                    class="badge {{ $category->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                    {{ $category->status == 1 ? 'Active' : 'InActive' }}
                                </div>
                            </td>
                            <td>
                                <span class="fw-bolder">
                                    {{ $category->parent_id ? $category->parent->name : 'N/A' }}
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-light-primary me-1"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-light-danger"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
                if (submitButton) {
                    submitButton.addEventListener('click', function(e) {
                        e.preventDefault();
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;

                        // Simulate form submission
                        setTimeout(function() {
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;

                            // Show popup confirmation
                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }, 2000);
                    });
                }
            });
        </script>
    @endpush
</x-admin-app-layout>
