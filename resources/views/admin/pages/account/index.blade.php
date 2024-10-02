<x-admin-app-layout :title="'Account List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Manage Your Accounts</h4>
                                </div>
                                <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#addModal">
                                    <i class="fa-solid fa-plus pe-2" aria-hidden="true"></i>
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Image</th>
                                        <th>Bank Name</th>
                                        <th>Branch Name</th>
                                        <th>Account Number</th>
                                        <th>Available Balance</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="bg-secondary rounded no-preview-sm"><small>No Preview</small>
                                            </div>
                                        </td>
                                        <td>Cash</td>
                                        <td>Office</td>
                                        <td>CASH-0001</td>
                                        <td>$66646.50</td>
                                        <td>2nd Oct, 2024</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td class="text-end">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)" type="submit" class="btn btn-sm btn-danger">
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
    <!-- Add New Account Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addModalLabel">Add New Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <x-admin.label for="bankName">Bank Name *</x-admin.label>
                                <x-admin.input type="text" class="form-control" id="bankName" name="bank_name"
                                    placeholder="Enter a bank name" required></x-admin.input>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="branchName">Branch Name</x-admin.label>
                                <x-admin.input type="text" class="form-control" id="branchName" name="branch_name"
                                    placeholder="Enter a branch name"></x-admin.input>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="accountNumber">Account Number *</x-admin.label>
                                <x-admin.input type="text" class="form-control" id="accountNumber"
                                    name="account_number" placeholder="Enter an account number"
                                    required></x-admin.input>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="image">Image</x-admin.label>
                                <x-admin.input type="file" class="form-control-file" id="image"
                                    name="image"></x-admin.input>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="date">Date</x-admin.label>
                                <x-admin.input type="date" class="form-control" id="date" name="date"
                                    value="2024-10-02"></x-admin.input>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="status">Status</x-admin.label>
                                <x-admin.select-option class="form-control" id="status" name="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </x-admin.select-option>
                            </div>

                            <div class="form-group">
                                <x-admin.label for="note">Note</x-admin.label>
                                <textarea class="form-control" id="note" name="note" rows="3" placeholder="Write your note here!"></textarea>
                            </div>

                            <x-admin.button type="submit" class="primary mt-3">Add Adjustment</x-admin.button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
