<x-admin-app-layout :title="'Product List'">
    {{-- <div class="row">
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-dark">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i
                                        class="fa-product text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-white fs-5 fw-bold lh-0">Total Product
                                    <span class="text-white fw-semibold d-block fs-6 pt-4">{{ date('d-M-Y') }}</span>
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
    </div> --}}

    <div class="card card-flush mt-10">
        <div class="card-header bg-dark align-items-center">
            <h3 class="card-title text-white">Product List</h3>
            <div>
                <a type="button" href="{{ route('admin.product.create') }}" class="btn btn-light-primary">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        {{-- <th width="10%">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_product_table .form-check-input" value="1" />
                            </div>
                        </th> --}}
                        <th width="8%">{{ __('product.Sl') }}</th>
                        <th width="12%">{{ __('product.Image') }}</th>
                        <th width="45%">{{ __('product.Name') }}</th>
                        <th width="15%">{{ __('product.Status') }}</th>
                        <th width="10%">{{ __('product.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($products as $product) --}}
                    @foreach ($products as $product)
                        <tr>
                            {{-- <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td> --}}
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="w-75px" src="{{ asset('storage/'.$product->thumbnail) }}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <span class="badge {{ $product->status == 'published' ? 'bg-success' : 'bg-danger' }}">
                                {{ $product->status == 'published' ? 'Published' : 'Unpublished' }}</span>
                            </td>
                            <td>
                                {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                    <i class="fa-solid fa-expand"></i>
                                </a> --}}
                                <a href="{{ route('admin.product.edit', $product->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ route('admin.product.destroy', $product->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                    data-kt-docs-table-filter="delete_row">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- @endforeach --}}
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
