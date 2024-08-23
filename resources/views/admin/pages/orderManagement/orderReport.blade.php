<x-admin-app-layout :title="'Order Report'">
    <style>
        thead {
            background-color: transparent;
            font-weight: bold;
        }
    </style>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-dark align-items-center d-flex justify-content-between">
                    <h1 class="card-title text-white">Select Date To Generate Order Report</h1>
                    <div class="mb-0 d-flex align-items-center">
                        <div class="pe-3">
                            <input class="form-control form-control-solid w-100 rounded-2" placeholder="Pick date range"
                                id="kt_daterangepicker_2" />
                        </div>
                        <div>
                            <button class="btn btn-white rounded-2" id="printBtn">
                                <i class="fa-solid fa-print pe-3"></i>
                                Print
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 text-center">
                                <th>Sl</th>
                                <th>Order Number</th>
                                <th>Customer</th>
                                <th>Created At</th>
                                <th>Price</th>
                                <th>QTY</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="text-center">
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <a href="">
                                            {{ $order->order_number }}
                                        </a>
                                    </td>
                                    <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td><span class="text-info fw-bold">£</span>{{ $order->total_amount }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>
                                        @if ($order->payment_status == 'unpaid')
                                            <span class="badge py-3 px-4 fs-7 badge-danger">Unpaid</span>
                                        @elseif ($order->payment_status == 'paid')
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Paid</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->status == 'pending')
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Pending</span>
                                        @elseif ($order->status == 'processing')
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Processing</span>
                                        @elseif ($order->status == 'shipped')
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        @elseif ($order->status == 'delivered')
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Delivered</span>
                                        @elseif ($order->status == 'cancelled')
                                            <span class="badge py-3 px-4 fs-7 badge-light-dangered">Cancelled</span>
                                        @elseif ($order->status == 'returned')
                                            <span class="badge py-3 px-4 fs-7 badge-light-dangered">Returned</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button
                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                            data-bs-toggle="modal" data-bs-target="#printInovice{{ $order->id }}">
                                            <i class="fa-solid fa-print"></i>
                                        </button>
                                        <a href="{{ route('admin.orderDetails', $order->id) }}"
                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                            <i class="fa-solid fa-eye" title="Order Details"></i>
                                        </a>
                                        {{-- <a href="javascript:void(0)">
                                                <button
                                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                                    <i class="fa-solid fa-file-download"></i>
                                                </button>
                                            </a> --}}
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                            data-kt-docs-datatable-subtable="expand_row">
                                            <span class="svg-icon fs-3 m-0 toggle-off">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                            <span class="svg-icon fs-3 m-0 toggle-on">
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                @foreach ($order->orderItems as $item)
                                    <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none bg-light">
                                        <td colspan="3">
                                            <div class="d-flex align-items-center gap-3">
                                                <a href="#"
                                                    class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                    <img src="{{ asset('storage/' . $item->product->thumbnail) }}"
                                                        alt=""
                                                        data-kt-docs-datatable-subtable="template_image" />
                                                </a>
                                                <div class="d-flex flex-column text-muted">
                                                    <a href="#" class="text-gray-900 text-hover-primary fw-bold"
                                                        data-kt-docs-datatable-subtable="template_name">Product name</a>
                                                    <div class="fs-7"
                                                        data-kt-docs-datatable-subtable="template_description">
                                                        {{ $item->product->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Cost</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_cost">£ {{ $item->price }}
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Qty</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_qty">{{ $item->quantity }}
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="text-gray-900 fs-7">Total</div>
                                            <div class="text-muted fs-7 fw-bold"
                                                data-kt-docs-datatable-subtable="template_total">£
                                                {{ $item->subtotal }}
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.pages.orderManagement.partial.invoice')
    @push('scripts')
        <script>
            // Initialize the date range picker
            $("#kt_daterangepicker_2").daterangepicker({
                timePicker: true,
                startDate: moment().startOf("hour"), // Starting from the current hour
                endDate: moment().startOf("hour").add(32, "hour"), // Ending 32 hours later
                locale: {
                    format: "M/DD hh:mm A"
                },
                autoUpdateInput: false,
            }, function(start, end, label) {
                $('#kt_daterangepicker_2').val(start.format('M/DD hh:mm A') + ' - ' + end.format('M/DD hh:mm A'));
            });
        </script>
        <script>
            // Print the table when the print button is clicked
            document.getElementById('printBtn').addEventListener('click', function() {
                var printContents = document.getElementById('orderTable').outerHTML;
                var newWindow = window.open('', '', 'height=500,width=800');

                newWindow.document.write('<html><head><title>Print Order Report</title>');
                newWindow.document.write('<link rel="stylesheet" href="path_to_your_css_file.css" type="text/css"/>');
                newWindow.document.write('</head><body>');
                newWindow.document.write(printContents);
                newWindow.document.write('</body></html>');

                newWindow.document.close();
                newWindow.focus();
                newWindow.print();
                newWindow.close();

            });
        </script>
    @endpush
</x-admin-app-layout>
