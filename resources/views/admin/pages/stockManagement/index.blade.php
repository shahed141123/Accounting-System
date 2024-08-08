<x-admin-app-layout :title="'Stock Management'">
    <style>
        td {
            height: 50px;
            vertical-align: middle;
        }
    </style>
    <div class="row">
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-brands text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Total Product
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
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-solid fa-tent-arrows-down text-white fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Low Stock
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
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-solid fa-campground text-white fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Out Of Stock
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
        <div class="col-xl-3">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-solid fa-house-circle-check text-white fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Most Stock
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
            <h3 class="card-title">Create Stock Methods</h3>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal" data-bs-target="#stockMethodsCreate">
                    <i class="fa-solid fa-plus"></i> Create
                </button>

                <!-- Modal -->
                <div class="modal fade" id="stockMethodsCreate" tabindex="-1"
                    aria-labelledby="stockMethodsCreateLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="stockMethodsCreateLabel">Stock Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
                                    <div class="fv-row mb-10 text-center">
                                        <div class="">
                                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                data-kt-image-input="true">
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="fa-solid fa-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <input type="file" name="thumbnail"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="thumbnail_remove" />
                                                </label>
                                            </div>
                                            <div class="text-muted fs-7">
                                                Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image
                                                files are accepted
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="fw-semibold fs-6 mb-2">Product Name</label>

                                        <input type="text" name="zone"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="Marlone Navy Coat" />
                                    </div>
                                    <div class="row">
                                        <div class="fv-row mb-10 col-xl-6">
                                            <label class="fw-semibold fs-6 mb-2">Category</label>
                                            <select class="form-select form-select" name="status" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Active</option>
                                                <option value="2">Deactive</option>
                                            </select>
                                        </div>
                                        <div class="fv-row mb-10 col-xl-6">
                                            <label class="fw-semibold fs-6 mb-2">Brands</label>
                                            <select class="form-select form-select" name="status" data-control="select2"
                                                data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Active</option>
                                                <option value="2">Deactive</option>
                                            </select>
                                        </div>
                                        <div class="fv-row mb-10 col-xl-6">
                                            <label class="fw-semibold fs-6 mb-2">QTY</label>
                                            <input type="number" name="zone"
                                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                                value="$5661" />
                                        </div>
                                        <div class="fv-row mb-10 col-xl-6">
                                            <label class="fw-semibold fs-6 mb-2">Price</label>
                                            <input type="number" name="zone"
                                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                                value="$5661" />
                                        </div>
                                    </div>

                                    <button id="kt_docs_formvalidation_text_submit" type="submit"
                                        class="btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
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
                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                        <th width="%">ID</th>
                        <th width="%">Image</th>
                        <th width="%">Product Name</th>
                        <th width="%">Category</th>
                        <th width="%">Brand</th>
                        <th width="%">View</th>
                        <th width="%">QTY</th>
                        <th width="%">Price</th>
                        <th width="%">Created</th>
                        <th width="%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>
                            <div class="symbol symbol-50px me-3">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-9.jpg"
                                    class="" alt="">
                            </div>
                        </td>
                        <td>Melton Coat Navy</td>
                        <td>Jacket</td>
                        <td>Arrong</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal"
                                data-bs-target="#stockMethodsEdit">
                                <i class="fa-solid fa-pencil"></i> View & Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="stockMethodsEdit" tabindex="-1"
                                aria-labelledby="stockMethodsEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title" id="stockMethodsEditLabel">stock Methods
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
                                                <div class="fv-row mb-10 text-center">
                                                    <div class="">
                                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                            data-kt-image-input="true">
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                title="Change avatar">
                                                                <i class="fa-solid fa-pencil fs-7">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="file" name="thumbnail"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="thumbnail_remove" />
                                                            </label>
                                                        </div>
                                                        <div class="text-muted fs-7">
                                                            Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image
                                                            files are accepted
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fv-row mb-10">
                                                    <label class="fw-semibold fs-6 mb-2">Product Name</label>

                                                    <input type="text" name="zone"
                                                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                                        value="Marlone Navy Coat" />
                                                </div>
                                                <div class="row">
                                                    <div class="fv-row mb-10 col-xl-6">
                                                        <label class="fw-semibold fs-6 mb-2">Category</label>
                                                        <select class="form-select form-select" name="status" data-control="select2"
                                                            data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Deactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="fv-row mb-10 col-xl-6">
                                                        <label class="fw-semibold fs-6 mb-2">Brands</label>
                                                        <select class="form-select form-select" name="status" data-control="select2"
                                                            data-placeholder="Select an option">
                                                            <option></option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Deactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="fv-row mb-10 col-xl-6">
                                                        <label class="fw-semibold fs-6 mb-2">QTY</label>
                                                        <input type="number" name="zone"
                                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                                            value="$5661" />
                                                    </div>
                                                    <div class="fv-row mb-10 col-xl-6">
                                                        <label class="fw-semibold fs-6 mb-2">Price</label>
                                                        <input type="number" name="zone"
                                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                                            value="$5661" />
                                                    </div>
                                                </div>

                                                <button id="kt_docs_formvalidation_text_submit" type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Validation Form
                                                    </span>
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
                        </td>
                        <td class="text-start">
                            56
                        </td>
                        <td>$5661</td>
                        <td>25 Aug 2024</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <script>
            // Define form element
            const form = document.getElementById('kt_docs_formvalidation_text');

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            var validator = FormValidation.formValidation(
                form, {
                    fields: {
                        'text_input': {
                            validators: {
                                notEmpty: {
                                    message: 'Text input is required'
                                }
                            }
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Submit button handler
            const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
            submitButton.addEventListener('click', function(e) {
                // Prevent default button action
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function(status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click
                            submitButton.disabled = true;

                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function() {
                                // Remove loading indication
                                submitButton.removeAttribute('data-kt-indicator');

                                // Enable button
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

                                //form.submit(); // Submit form
                            }, 2000);
                        }
                    });
                }
            });
        </script>
    @endpush
</x-admin-app-layout>
