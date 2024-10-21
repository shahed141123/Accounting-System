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
                            <table class="table">
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
                                <tbody id="table-body">
                                    @forelse($balances as $i => $data)
                                    <tr>
                                        <td>{{ $loop->iteration + (($pagination->current_page - 1) * $pagination->per_page) }}</td>
                                        <td>{{ $data->account ? $data->account->bankName : '' }}</td>
                                        <td>{{ $data->account ? $data->account->accountNumber : '' }}</td>
                                        <td>{{ number_format($data->amount, 2) }}</td>
                                        <td>
                                            <span class="badge {{ $data->type == 1 ? 'bg-success' : 'bg-danger' }}">
                                                {{ $data->type == 1 ? __('common.add_balance') : __('common.remove_balance') }}
                                            </span>
                                        </td>
                                        <td>{{ $data->transactionDate->format('d M, Y') }}</td>
                                        <td>
                                            <span class="badge {{ $data->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                                {{ $data->status == 1 ? __('common.active') : __('common.in_active') }}
                                            </span>
                                        </td>
                                        @if(auth()->user()->can('account-balance-edit') || auth()->user()->can('account-balance-delete'))
                                        <td class="text-right no-print">
                                            <div class="btn-group">
                                                @can('account-balance-edit')
                                                <a href="{{ route('balances.edit', ['slug' => $data->slug]) }}" class="btn btn-info btn-sm" title="{{ __('common.edit') }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @endcan
                                                @can('account-balance-delete')
                                                <a href="#" class="btn btn-danger btn-sm" title="{{ __('common.delete') }}" onclick="deleteData('{{ $data->slug }}')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                @endcan
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8">
                                            <div class="text-center">{{ __('common.no_data') }}</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
