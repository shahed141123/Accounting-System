<x-admin-app-layout :title="'Expence'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Mange Your Expences</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Export To Excel">
                                        <i class="fa-solid fa-file-csv"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Download PDF">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Print Table">
                                        <i class="fa-solid fa-print"></i>
                                        <span class="tooltiptext">Print</span>
                                    </button>
                                    <a href="{{ route('admin.expense.create') }}"
                                        class="btn btn-outline-light toltip" data-tooltip="Create New"> Create
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%" class="text-center">Sl</th>
                                        <th width="5%" class="text-center">Image</th>
                                        <th width="20%" class="text-center">Expense Reason</th>
                                        <th width="10%" class="text-center">Category</th>
                                        <th width="15%" class="text-center">Sub Category</th>
                                        <th width="10%" class="text-center">Amount</th>
                                        <th width="10%" class="text-center">Account</th>
                                        <th width="10%" class="text-center">Date</th>
                                        <th width="5%" class="text-center">Status</th>
                                        <th width="10%" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <div>
                                                <img width="50px" src="{{ asset('images/no_image.jpg') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                        <td class="text-center">Sticky Notes Purchase</td>
                                        <td class="text-center">Stationary[AEC-2]</td>
                                        <td class="text-center">Office Stationary [AES-2]</td>
                                        <td class="text-center">$1000.00</td>
                                        <td class="text-center">Cash[CASH-0001]</td>
                                        <td class="text-center">17th Oct, 2024</td>
                                        <td class="text-center">
                                            <span class="badge bg-danger">
                                                inactive</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Expense Modal -->
    {{-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addModalLabel">Add New Expense</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-solid" id="name" name="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="reason" class="form-label">Reason</label>
                            <input type="text" class="form-control form-control-solid" id="reason" name="reason"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control form-control-solid" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <textarea class="form-control form-control-solid" id="note" name="note"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-select-solid" id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control form-control-solid" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="cat_id" class="form-label">Category</label>
                            <select class="form-select form-select-solid" id="cat_id" name="cat_id">
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sub_cat_id" class="form-label">Sub Category</label>
                            <select class="form-select form-select-solid" id="sub_cat_id" name="sub_cat_id">
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transaction_id" class="form-label">Transaction</label>
                            <select class="form-select form-select-solid" id="transaction_id" name="transaction_id">
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                                <option value="">Choosen</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-white">Add Expense</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-app-layout>
