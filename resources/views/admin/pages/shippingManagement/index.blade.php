<x-admin-app-layout :title="'Stock Management'">
    <div class="row">
        <div class="col-xl-4">
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
        <div class="col-xl-4">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-solid text-white fa-copyright fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Total Brand
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
        <div class="col-xl-4">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between ">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i class="fa-solid text-white fa-list fs-3"
                                        aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1"><a href="">
                                </a><a href="#" class="text-black fs-5 fw-bold lh-0">Total Category
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
            <h3 class="card-title">Create Shipping Methods</h3>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal"
                data-bs-target="#shippingMethodsEdit">
                <i class="fa-solid fa-plus"></i> Create
            </button>

            <!-- Modal -->
            <div class="modal fade" id="shippingMethodsEdit" tabindex="-1" aria-labelledby="shippingMethodsEditLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="shippingMethodsEditLabel">Shipping Methods</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="kt_docs_formvalidation_text" class="form" action="#"
                                autocomplete="off">
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Title</label>

                                    <input type="text" name="title"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="" value="Super Fast Delivery" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Zone</label>

                                    <input type="text" name="zone"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="" value="ASIA" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fw-semibold fs-6 mb-2">Cost</label>

                                    <input type="text" name="zone"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="" value="$5661" />
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
                                    <span class="indicator-label">
                                        Submit
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
                        <th width="5%">ID</th>
                        <th width="25%">Title</th>
                        <th width="15%">Zone</th>
                        <th width="15%">View</th>
                        <th width="20%">Status</th>
                        <th width="10%">Const</th>
                        <th width="10%">Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>01</td>
                        <td>Super Fast Delivery</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal"
                                data-bs-target="#shippingMethodsEdit">
                                <i class="fa-solid fa-pencil"></i> View & Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="shippingMethodsEdit" tabindex="-1" aria-labelledby="shippingMethodsEditLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title" id="shippingMethodsEditLabel">Shipping Methods</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="kt_docs_formvalidation_text" class="form" action="#"
                                                autocomplete="off">
                                                <div class="fv-row mb-10">
                                                    <label class="fw-semibold fs-6 mb-2">Title</label>

                                                    <input type="text" name="title"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="" value="Super Fast Delivery" />
                                                </div>
                                                <div class="fv-row mb-10">
                                                    <label class="fw-semibold fs-6 mb-2">Zone</label>

                                                    <input type="text" name="zone"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="" value="ASIA" />
                                                </div>
                                                <div class="fv-row mb-10">
                                                    <label class="fw-semibold fs-6 mb-2">Cost</label>

                                                    <input type="text" name="zone"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="" value="$5661" />
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
                                                    <span class="indicator-label">
                                                        Submit
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
                            <select class="form-select form-select-sm w-150px" data-control="select2"
                                data-placeholder="Select an option">
                                <option value="1">Options</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                        </td>
                        <td>$5661</td>
                        <td class="text-start">
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
