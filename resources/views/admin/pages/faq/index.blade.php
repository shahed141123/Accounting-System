<x-admin-app-layout :title="'FAQ LIst'">

    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="container px-0">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 text-lg-start text-sm-center">

                    </div>
                    <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                        <div class="card-title table_title">
                            <h2 class="text-center">FAQ Table</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                        <a class="btn btn-sm btn-light-success rounded-0" href="{{ route('admin.faq.create') }}">
                            Add New
                        </a>
                        {{-- <button type="button" class="btn btn-sm btn-light-success rounded-0"
                            data-kt-menu-placement="bottom-end" data-bs-toggle="modal" data-bs-target="#faqAddModal">
                            Add New
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="kt_datatable_example table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                id="kt_datatable_example">
                <thead class="table_header_bg">
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="" width="5%">Sl</th>
                        <th class="" width="20%">Category Name</th>
                        <th class="" width="45%">Order Number</th>
                        <th class="" width="20%">Status</th>
                        <th class="" width="10%">Action</th>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @if ($faqs)
                        @foreach ($faqs as $faq)
                            <tr class="odd">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $faq->faqCategory ? $faq->faqCategory->name : 'No Category' }}
                                </td>
                                <td>
                                    {{ $faq->order }}
                                </td>
                                <td>
                                    <span class="badge {{ $faq->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $faq->status == 'active' ? 'Active' : 'InActive' }}</span>
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                    <a href="{{ route('admin.faq.edit', $faq->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.faq.destroy', $faq->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                        data-kt-docs-table-filter="delete_row">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>




    {{-- View Modal --}}
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqViewModal_{{ $faq->id }}" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">View Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="card border rounded-0">
                                <p class="badge badge-info custom-badge">Info</span>
                                <div class="card-body p-1 px-2">
                                    <div class="row">
                                        <div class="col-lg-12 mb-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <p class="fw-bold" title="Country Name">Category :</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p> {{ $faq->faqCategory ? $faq->faqCategory->name : 'No Category' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <p class="fw-bold">Question :</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p>{{ $faq->question }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <p class="fw-bold">Answer :</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p>
                                                        {{ $faq->answer }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <p class="fw-bold">Status :</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p>
                                                        <span
                                                            class="badge {{ $faq->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                                            {{ $faq->status == 1 ? 'active' : 'inactive' }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-admin-app-layout>
