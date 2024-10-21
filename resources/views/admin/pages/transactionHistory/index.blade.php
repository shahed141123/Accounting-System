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
                                    <h4 class="mb-0">Transaction History</h4>
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
                                    {{-- <a href="{{ route('admin.transaction-history.create') }}"
                                        class="btn btn-outline-light toltip" data-tooltip="Create New"> Create
                                        <i class="fa-solid fa-plus"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center mb-3 bg-light p-3">
                                <h6>Filter Accounts From-To</h6>
                                <div>
                                    <input class="form-control" name='range' id='cal' />
                                </div>
                            </div>
                            <div class="p-3 pt-1">
                                <!-- Table -->
                                {{-- <table class="table table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Sl</th>
                                            <th width="20%" class="text-center">Reason</th>
                                            <th width="10%" class="text-center">Date</th>
                                            <th width="10%" class="text-center">Type</th>
                                            <th width="10%" class="text-center">Account</th>
                                            <th width="10%" class="text-center">Amount</th>
                                            <th width="5%" class="text-center">Status</th>
                                            <th width="10%" class="text-end">Created By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">[AE-2] February Payroll sent from [CASH-0001]</td>
                                            <td class="text-center">17th Oct, 2024</td>
                                            <td class="text-center">
                                                <span class="badge bg-danger">
                                                    Debit</span>
                                            </td>
                                            <td class="text-center">Cash[CASH-0001]</td>
                                            <td class="text-center">$9800.00</td>
                                            <td class="text-center">
                                                <span class="badge bg-danger">
                                                    Status</span>
                                            </td>
                                            <td class="text-end">
                                                <span>Super Admin</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">[AE-2] February Payroll sent from [CASH-0001]</td>
                                            <td class="text-center">17th Oct, 2024</td>
                                            <td class="text-center">
                                                <span class="badge bg-danger">
                                                    Debit</span>
                                            </td>
                                            <td class="text-center">Cash[CASH-0001]</td>
                                            <td class="text-center">$9800.00</td>
                                            <td class="text-center">
                                                <span class="badge bg-danger">
                                                    Status</span>
                                            </td>
                                            <td class="text-end">
                                                <span>Super Admin</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                                <table class="table table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Sl</th>
                                            <th width="20%" class="text-center">Reason</th>
                                            <th width="10%" class="text-center">Date</th>
                                            <th width="10%" class="text-center">Type</th>
                                            <th width="10%" class="text-center">Account</th>
                                            <th width="10%" class="text-center">Amount</th>
                                            <th width="5%" class="text-center">Status</th>
                                            <th width="10%" class="text-end">Created By</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-body">
                                        @foreach ($transactions as $i => $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->reason }}</td>
                                                <td>{{ $data->transactionDate ? \Carbon\Carbon::parse($data->transactionDate)->format('d M, Y') : '' }}
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $data->type == 1 ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $data->type == 1 ? __('common.credit') : __('common.debit') }}
                                                    </span>
                                                </td>
                                                <td>{{ $data->account->label ?? '' }}</td>
                                                <td>{{ number_format($data->amount, 2) }}</td>
                                                <td>
                                                    <span
                                                        class="badge {{ $data->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $data->status == 1 ? __('common.active') : __('common.in_active') }}
                                                    </span>
                                                </td>
                                                <td class="text-right">{{ $data->user->name ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                        @if ($transactions->isEmpty())
                                            <tr>
                                                <td colspan="8">{{ __('No Data') }}</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // Multi Select Date Picker
            var dates = [];
            $(document).ready(function() {
                $("#cal").daterangepicker();
                $("#cal").on("apply.daterangepicker", function(e, picker) {
                    e.preventDefault();
                    const obj = {
                        key: dates.length + 1,
                        start: picker.startDate.format("MM/DD/YYYY"),
                        end: picker.endDate.format("MM/DD/YYYY"),
                    };
                    dates.push(obj);
                    showDates();
                });
                $(".remove").on("click", function() {
                    removeDate($(this).attr("key"));
                });
            });

            function showDates() {
                $("#ranges").html("");
                $.each(dates, function() {
                    const el =
                        "<li>" +
                        this.start +
                        "-" +
                        this.end +
                        "<button class='remove' onClick='removeDate(" +
                        this.key +
                        ")'>-</button></li>";
                    $("#ranges").append(el);
                });
            }

            function removeDate(i) {
                dates = dates.filter(function(o) {
                    return o.key !== i;
                });
                showDates();
            }
        </script>
    @endpush
</x-admin-app-layout>
