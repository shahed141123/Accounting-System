<x-admin-app-layout :title="'Stock Management'">
    <style>
        td {
            height: 50px;
            vertical-align: middle;
        }
    </style>
    <div class="card card-flush mt-10">
        <div class="card-header bg-dark align-items-center">
            <h3 class="card-title text-white">Create Stock Methods</h3>
        </div>
        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bold fs-6 text-center text-gray-800 px-7">
                        <th width="5%">ID</th>
                        <th width="8%">Image</th>
                        <th width="43%">Product Name</th>
                        <th width="10%">QTY</th>
                        <th width="12%">Price</th>
                        <th width="12%">Created</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" class=""
                                        alt="">
                                </div>
                            </td>
                            <td class="text-start">{{ $product->name }}</td>

                            <td class="text-center">
                                @if (!empty($product->box_stock) && $product->box_stock > 0)
                                    <span class="badge bg-success">
                                        {{ $product->box_stock }} In Stock</span>
                                @else
                                    <span class="badge bg-danger">Out Of
                                        Stock</span>
                                @endif
                            </td>
                            <td>
                                @if (!empty($product->box_discount_price))
                                    <div class="">
                                        <span class="ps-product__price sale">£{{ $product->box_discount_price }}</span>
                                        <span class="ps-product__del">£{{ $product->box_price }}</span>
                                    </div>
                                @else
                                    <div class="">
                                        <span class="ps-product__price sale">£{{ $product->box_price }}</span>
                                    </div>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#stockMethodsEdit-{{ $product->id }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <div class="modal fade" id="stockMethodsEdit-{{ $product->id }}" tabindex="-1"
                                    aria-labelledby="stockMethodsEditLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="stockMethodsEditLabel">Stock
                                                    Methods
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form" action="#" autocomplete="off" >
                                                    <div class="fv-row mb-10 text-center">
                                                        <div class="">
                                                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                                data-kt-image-input="true">
                                                                <div class="image-input-wrapper w-100px h-100px"></div>
                                                                <label
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="change"
                                                                    data-bs-toggle="tooltip" title="Change avatar">
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
                                                                Set the product thumbnail image. Only *.png, *.jpg and
                                                                *.jpeg image
                                                                files are accepted
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fv-row mb-10">
                                                        <label class="fw-semibold fs-6 mb-2">Product Name</label>

                                                        <input type="text" name="zone"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="" value="Marlone Navy Coat" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="fv-row mb-10 col-xl-6">
                                                            <label class="fw-semibold fs-6 mb-2">Category</label>
                                                            <select class="form-select form-select" name="status"
                                                                data-control="select2"
                                                                data-placeholder="Select an option">
                                                                <option></option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Deactive</option>
                                                            </select>
                                                        </div>
                                                        <div class="fv-row mb-10 col-xl-6">
                                                            <label class="fw-semibold fs-6 mb-2">Brands</label>
                                                            <select class="form-select form-select" name="status"
                                                                data-control="select2"
                                                                data-placeholder="Select an option">
                                                                <option></option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Deactive</option>
                                                            </select>
                                                        </div>
                                                        <div class="fv-row mb-10 col-xl-6">
                                                            <label class="fw-semibold fs-6 mb-2">QTY</label>
                                                            <input type="number" name="zone"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="$5661" />
                                                        </div>
                                                        <div class="fv-row mb-10 col-xl-6">
                                                            <label class="fw-semibold fs-6 mb-2">Price</label>
                                                            <input type="number" name="zone"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="$5661" />
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
                        </tr>
                    @endforeach
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
