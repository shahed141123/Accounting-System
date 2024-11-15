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
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    {{-- <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Export To Excel">
                                        <i class="fa-solid fa-file-csv"></i>
                                    </button> --}}
                                    <a href="{{ route('admin.expenses.pdf') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Download PDF">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Print Table">
                                        <i class="fa-solid fa-print"></i>
                                        <span class="tooltiptext">Print</span>
                                    </button>
                                    <a href="{{ route('admin.expense.create') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Create New"> Create
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Sl</th>
                                            {{-- <th width="5%" class="text-center">Image</th> --}}
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
                                    <tbody id="data-body">
                                        @foreach ($expenses as $expense)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                {{-- <td class="text-center">
                                                    <div>
                                                        <img width="50px" src="{{ asset('images/no_image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </td> --}}
                                                <td class="text-center">{{ optional($expense)->reason }}</td>
                                                <td class="text-center">{{ optional($expense->expCategory)->name }}
                                                    [{{ optional($expense->expCategory)->code }}]</td>
                                                <td class="text-center">{{ optional($expense->expSubCategory)->name }}
                                                    [{{ optional($expense->expSubCategory)->code }}]</td>
                                                <td class="text-center">{{ optional($expense)->amount }}</td>
                                                <td class="text-center">
                                                    {{ optional($expense->expTransaction)->cashbookAccount->bank_name }}[{{ optional($expense->expTransaction)->cashbookAccount->account_number }}]
                                                </td>
                                                <td class="text-center">
                                                    {{ optional($expense->date) ? \Carbon\Carbon::parse($expense->date)->format('jS M, Y') : '' }}
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $expense->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $expense->status == 'active' ? 'Active' : 'InActive' }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.expense.edit', optional($expense)->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#showexpense_{{ optional($expense)->id }}"
                                                        class="btn btn-sm btn-warning text-white">
                                                        <i class="fa-solid fa-expand"></i>
                                                    </a>
                                                    <a href="{{ route('admin.expense.destroy', optional($expense)->id) }}"
                                                        class="btn btn-sm btn-danger delete">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($expenses as $expense)
        <div class="modal fade" id="showexpense_{{ optional($expense)->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg rounded-0" role="document">
                <div class="modal-content border-0 rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title" id="modalTitleId">
                            {{ optional($expense)->reason }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 px-0">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- Logo Area --}}
                                                <div class="d-flex justify-content-between align-items-center my-4">
                                                    <div>
                                                        <h3 class="fw-bold mb-4 light-text-color">Invoice</h3>
                                                        <div class="d-flex align-items-center">
                                                            {{-- <div class="me-5">
                                                                <p class="mb-0 fw-semibold light-text-color">Invoice Number
                                                                </p>
                                                                <p class="mb-0">0001</p>
                                                            </div> --}}
                                                            <div class="">
                                                                <p class="mb-0 fw-semibold light-text-color">Date Of
                                                                    Issue
                                                                </p>
                                                                <p class="mb-0">
                                                                    {{ optional($expense) ? \Carbon\Carbon::parse($expense->date)->format('jS M, Y') : '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('admin.dashboard') }}" class="brand-link">

                                                            <img src="{{ optional($setting)->site_logo_black && file_exists(public_path('storage/' . $setting->site_logo_black)) ? asset('storage/' . $setting->site_logo_black) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}"
                                                                alt="{{ optional($setting)->website_name }}"
                                                                class="brand-image" width="150px" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row my-5">
                                                    <div class="col-lg-4">
                                                        @if (!empty(optional($expense)->client_id))
                                                            <p class="mb-0 fw-semibold light-text-color">Billed To</p>
                                                            <div class="pt-2">
                                                                <p class="mb-0">
                                                                    {{ optional($expense->client)->name }}
                                                                </p>
                                                                <p class="mb-0">
                                                                    {{ optional($expense->client)->company_name }}</p>
                                                                <p class="mb-0">
                                                                    {{ optional($expense->client)->address }}
                                                                </p>
                                                                <p class="mb-0">
                                                                    {{ optional($expense->client)->phone }}
                                                                </p>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-4">

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="mb-0 fw-semibold light-text-color text-end">
                                                            Billed From
                                                        </p>
                                                        <div class="pt-2 text-end">
                                                            <p class="mb-0">
                                                                {{ optional($setting)->website_name }}</p>
                                                            <p class="mb-0">
                                                                {{ optional($setting)->address_line_one }}</p>
                                                            <p class="mb-0">
                                                                {{ optional($setting)->address_line_two }}</p>
                                                            <p class="mb-0">
                                                                {{ optional($setting)->primary_phone }}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- Logo Area End --}}
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row gx-0 align-items-center">
                                                    <div class="col-lg-12 invoice_bg">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0 light-bg-color mb-4"
                                                                style="border-bottom: 2px solid #5D7079 !important;">
                                                                <thead class="border-0">
                                                                    <tr>
                                                                        <th width="30%" class="text-center">Expense
                                                                            Reason</th>
                                                                        <th width="20%" class="text-center">
                                                                            Category</th>
                                                                        <th width="15%" class="text-center">Amount
                                                                        </th>
                                                                        <th width="23%" class="text-center">Account
                                                                        </th>
                                                                        <th width="12%" class="text-center">Date
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <td class="text-center">
                                                                        {{ optional($expense)->reason }}</td>
                                                                    <td class="text-center">
                                                                        {{ optional($expense->expCategory)->name }}
                                                                        [{{ optional($expense->expCategory)->code }}]
                                                                    </td>
                                                                    <td class="text-center">
                                                                        {{ optional($expense)->amount }}</td>
                                                                    <td class="text-center">
                                                                        {{ optional($expense->expTransaction->cashbookAccount)->bank_name }}[{{ optional($expense->expTransaction->cashbookAccount)->account_number }}]
                                                                    </td>
                                                                    <td class="text-center">
                                                                        {{ optional($expense) ? \Carbon\Carbon::parse($expense->date)->format('jS M, Y') : '' }}
                                                                    </td>
                                                                </tbody>
                                                            </table>
                                                            <table class="table mb-4 light-bg-color">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="invoice_bg border-0"
                                                                            colspan="3">
                                                                            <h6 class="light-text-color">Terms</h6>
                                                                        </td>
                                                                        <td class="invoice_bg border-0">
                                                                            <small class="light-text-color">Sub
                                                                                Total
                                                                            </small>
                                                                        </td>
                                                                        <td class="invoice_bg border-0 text-end">
                                                                            {{ optional($expense)->amount }}
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="invoice_bg border-0"
                                                                            colspan="3">
                                                                            <small class="light-text-color"></small>
                                                                        </td>
                                                                        <td class="invoice_bg border" colspan="2">
                                                                            <h5 class="light-text-color text-center">
                                                                                Grand Total <br>
                                                                                {{ optional($expense)->amount }}
                                                                            </h5>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-0 align-items-end">
                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="p-4">
                                                            <p class="mb-0 fw-semibold light-text-color">BANK ACCOUNT
                                                                DETAILS:</p>
                                                            <div class="pt-2">
                                                                <p class="mb-1 fw-semibold">Bank Name:
                                                                    <span
                                                                        class="ps-2 fw-normal">{{ optional($expense->expTransaction->cashbookAccount)->bank_name }}</span>
                                                                </p>
                                                                <p class="mb-1 fw-semibold">Branch Name:
                                                                    <span
                                                                        class="ps-2 fw-normal">{{ optional($expense->expTransaction->cashbookAccount)->branch_name }}</span>
                                                                </p>
                                                                <p class="mb-1 fw-semibold">Account Number:
                                                                    <span
                                                                        class="ps-2 fw-normal">{{ optional($expense->expTransaction->cashbookAccount)->account_number }}</span>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button class="btn-common-one border-0 me-2"><i
                                                class="fa-solid fa-file-arrow-down pe-2"></i> Download</button>
                                        <button class="btn-common-one border-0"><i
                                                class="fa-solid fa-print pe-2"></i>Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    @push('scripts')
        <script>
            $(document).ready(function() {
                // Initialize datepicker or date range picker (e.g., flatpickr, jQuery UI Datepicker)
                $('#datefilter').daterangepicker({
                    locale: {
                        format: 'YYYY-MM-DD'
                    },
                    autoUpdateInput: false, // We will manually update the input field
                    opens: 'left', // Optional: Adjust the dropdown position
                });

                // When the user selects a date range
                $('#datefilter').on('apply.daterangepicker', function(ev, picker) {
                    // Set the selected date range in the input field
                    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format(
                        'YYYY-MM-DD'));
                    let startDate = picker.startDate.format('YYYY-MM-DD');
                    let endDate = picker.endDate.format('YYYY-MM-DD');
                    fetchFilteredData(startDate, endDate);
                });

                // "Clear Filter" button click handler
                $('#clear-filter').click(function() {
                    // Reset the date filter input
                    $('#datefilter').val('');
                    // Fetch all data (no filter applied)
                    fetchFilteredData('', '');
                });

                function fetchFilteredData(startDate, endDate) {
                    $.ajax({
                        url: '{{ route('admin.expense.filter') }}', // Add your route here
                        method: 'GET',
                        data: {
                            start_date: startDate,
                            end_date: endDate,
                        },
                        success: function(response) {
                            // Update the table body with the filtered data
                            $('#data-body').html(response);
                        },
                        error: function() {
                            alert('Error fetching data');
                        }
                    });
                }
            });
        </script>
    @endpush
</x-admin-app-layout>
