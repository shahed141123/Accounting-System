<x-admin-app-layout :title="'Accounts List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Balance Adjustments</h4>
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
                                    <a href="{{ route('admin.balance-adjustment.create') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Create New"> Create
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
                                        <th width="3%" class="text-center">Sl</th>
                                        <th width="15%" class="text-center">Bank Name</th>
                                        <th width="20%" class="text-center">Account Number</th>
                                        <th width="10%" class="text-center">Amount</th>
                                        <th width="10%" class="text-center">Type</th>
                                        <th width="15%" class="text-center">Date</th>
                                        <th width="7%" class="text-center">Status</th>
                                        <th width="10%" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Islami Bank Bangladesh Ltd</td>
                                        <td class="text-center">IBBL-0002</td>
                                        <td class="text-center">$100000.00</td>
                                        <td class="text-center">
                                            <span class="badge bg-info">
                                                Add Balance</span>
                                        </td>
                                        <td class="text-center">17th Oct, 2024</td>
                                        <td class="text-center">
                                            <span class="badge bg-primary">
                                                Active</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary toltip"
                                                data-tooltip="Edit">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger toltip"
                                                data-tooltip="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Islami Bank Bangladesh Ltd</td>
                                        <td class="text-center">IBBL-0002</td>
                                        <td class="text-center">$100000.00</td>
                                        <td class="text-center">
                                            <span class="badge bg-info">
                                                Add Balance</span>
                                        </td>
                                        <td class="text-center">17th Oct, 2024</td>
                                        <td class="text-center">
                                            <span class="badge bg-primary">
                                                Active</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary toltip"
                                                data-tooltip="Edit">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger toltip"
                                                data-tooltip="Delete">
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
</x-admin-app-layout>
