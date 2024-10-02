<x-admin-app-layout :title="'Account Transactions List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Transactions History</h4>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#addTransactionModal">
                                        <i class="fa-solid fa-plus pe-2" aria-hidden="true"></i>
                                        Add
                                    </button>
                                    <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#exportModal">
                                        <i class="fa-solid fa-file-export pe-2" aria-hidden="true"></i>
                                        Export
                                    </button>
                                    <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#pdfModal">
                                        <i class="fa-solid fa-file-pdf pe-2" aria-hidden="true"></i>
                                        PDF
                                    </button>
                                    <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#printModal">
                                        <i class="fa-solid fa-print pe-2" aria-hidden="true"></i>
                                        Print
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Account</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>[AE-2] February Payroll sent from [CASH-0001]</td>
                                        <td>2nd Oct, 2024</td>
                                        <td><span class="badge bg-danger">Debit</span></td>
                                        <td>Cash[CASH-0001]</td>
                                        <td>$9800.00</td>
                                        <td><span class="badge bg-danger">Debit</span></td>
                                        <td>Super Admin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
