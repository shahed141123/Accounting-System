<x-admin-app-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Manage Income Categories</h4>
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
                                    <a href="{{ route('admin.income-category.create') }}"
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
                                        <th width="10%" class="text-center">Code</th>
                                        <th width="30%" class="text-center">Name</th>
                                        <th width="35%" class="text-center">Note</th>
                                        <th width="10%" class="text-center">Status</th>
                                        <th width="10%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">AEC-1</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">
                                            <span class="badge bg-danger">
                                                inactive</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">AEC-1</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">
                                            <span class="badge bg-success">
                                                Active</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">AEC-1</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">Rent</td>
                                        <td class="text-center">
                                            <span class="badge bg-success">
                                                Active</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-expand"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger delete">
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
