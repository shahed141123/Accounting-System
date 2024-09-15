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
                                    <h4 class="mb-0">Manage Your Expenses</h4>
                                </div>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#addModal">
                                    Add New Expense
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>asdasdasd</td>
                                        <td>asdadasd</td>
                                        <td>asdadasd</td>
                                        <td>asdasdasd</td>
                                        <td>asdasdasd</td>
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
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
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
                        <button type="submit" class="btn btn-info">Add Expense</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
