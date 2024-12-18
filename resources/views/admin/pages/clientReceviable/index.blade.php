<x-admin-app-layout :title="'Account Client Receviable List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Manage Client Receviable Invoice</h4>
                                </div>
                                <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#addTransactionModal">
                                    <i class="fa-solid fa-plus pe-2"></i> Add
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Client ID</th>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Invoice Due</th>
                                        <th>Non Invoice Due</th>
                                        <th>Total Due</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>AC-1</td>
                                        <td>Walking Customer</td>
                                        <td>017000000</td>
                                        <td>acculance@example.com</td>
                                        <td>Codeshaper</td>
                                        <td>$2408.25</td>
                                        <td>$0</td>
                                        <td>$2408.25</td>
                                        <td>
                                            <span class="badge bg-primary">
                                                $2408.25
                                            </span>
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

    <!-- Add New Transaction Modal -->
    <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addTransactionLabel">Add New Account Transaction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="reason" class="form-label">Reason</label>
                            <input type="text" class="form-control form-control-solid" id="reason" name="reason">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" step="0.01" class="form-control form-control-solid" id="amount"
                                name="amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Transaction Type</label>
                            <select class="form-select form-select-solid" id="type" name="type" required>
                                <option value="0">Debit</option>
                                <option value="1">Credit</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transaction_date" class="form-label">Transaction Date</label>
                            <input type="datetime-local" class="form-control form-control-solid" id="transaction_date"
                                name="transaction_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="cheque_no" class="form-label">Cheque No</label>
                            <input type="text" class="form-control form-control-solid" id="cheque_no"
                                name="cheque_no">
                        </div>
                        <div class="mb-3">
                            <label for="receipt_no" class="form-label">Receipt No</label>
                            <input type="text" class="form-control form-control-solid" id="receipt_no"
                                name="receipt_no">
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
                            <label for="account_id" class="form-label">Account</label>
                            <select class="form-select form-select-solid" id="account_id" name="account_id">
                                <option value="1">Account 1</option>
                                <option value="2">Account 2</option>
                                <!-- Add dynamic account options -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-white">Add Transaction</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
