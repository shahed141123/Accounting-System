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
                    <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7" id="orderTable">
                        <thead class="bg-dark">
                            <tr class="fw-semibold fs-6 text-gray-800">
                                <th>Sl</th>
                                <th>Order ID</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Qty</th>
                                <th class="text-end">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#56584asd</td>
                                <td>Home & Kitchen</td>
                                <td>01 Aug 2024</td>
                                <td>61</td>
                                <td class="text-end">$320,800</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                        <tfoot style="background-color: #eee;">
                            <tr>
                                <td colspan="4" class="text-black text-end fw-bold">Grand Total</td>
                                <td class="text-black">61</td>
                                <td class="text-black text-end">$320,800</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
