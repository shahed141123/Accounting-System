<x-admin-app-layout :title="'Account Balance Adjustment List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Manage Balance Adjustment</h4>
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
                                        <th>Reason</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Transaction Date</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sample Reason</td>
                                        <td>$100.00</td>
                                        <td>Credit</td>
                                        <td>2024-09-15</td>
                                        <td>Active</td>
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

    <!-- Add New Transaction Modal -->
    <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addTransactionLabel">Balance Adjustment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <x-admin.label for="account" class="form-label">Account *</x-admin.label>
                            <x-admin.select-option class="form-select form-select-solid" id="account" name="account" required>
                                <option value="Cash[CASH-0001]">Cash[CASH-0001]</option>
                                <!-- Add dynamic account options -->
                            </x-admin.select-option>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="available_balance" class="form-label">Available Balance</x-admin.label>
                            <x-admin.input type="text" class="form-control form-control-solid" id="available_balance"
                                name="available_balance" value="66646.5" readonly></x-admin.input>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="transaction_date" class="form-label">Date *</x-admin.label>
                            <x-admin.input type="date" class="form-control form-control-solid" id="transaction_date"
                                name="transaction_date" required></x-admin.input>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="type" class="form-label">Type</x-admin.label>
                            <x-admin.select-option class="form-select form-select-solid" id="type" name="type">
                                <option value="add_balance">Add Balance</option>
                                <!-- Add more types as needed -->
                            </x-admin.select-option>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="amount" class="form-label">Amount *</x-admin.label>
                            <x-admin.input type="number" step="0.01" class="form-control form-control-solid" id="amount"
                                name="amount" required></x-admin.input>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="status" class="form-label">Status</x-admin.label>
                            <x-admin.select-option class="form-select form-select-solid" id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </x-admin.select-option>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="note" class="form-label">Note</x-admin.label>
                            <textarea class="form-control form-control-solid" id="note" name="note" placeholder="Write your note here!"></textarea>
                        </div>
                        <x-admin.button type="submit" class="primary">Add Adjustment</x-admin.button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-admin-app-layout>
