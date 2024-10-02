<x-admin-app-layout :title="'Account Client Invoice Create'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Invoices</h4>
                                </div>
                                <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#client_invoice">
                                    <i class="fa-solid fa-plus pe-2"></i> Add
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>01</th>
                                        <th>Invoice No</th>
                                        <th>Invoice Date</th>
                                        <th>Subtotal</th>
                                        <th>Transport</th>
                                        <th>Discount</th>
                                        <th>Tax</th>
                                        <th>Net Total</th>
                                        <th>Total Paid</th>
                                        <th>Total Due</th>
                                        <th>Status</th>
                                        <th>Woocommerce Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>AI-1</td>
                                        <td>2nd Oct, 2024</td>
                                        <td>Troy Walker</td>
                                        <td>$18725.00</td>
                                        <td>$0</td>
                                        <td>$0</td>
                                        <td>$1872.50</td>
                                        <td>$20597.50</td>
                                        <td>$15000.00</td>
                                        <td>$5597.50</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>""</td>
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
    <div class="modal fade" id="client_invoice" tabindex="-1" aria-labelledby="addTransactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addTransactionLabel">Client Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-admin.label for="client">Client *</x-admin.label>
                            <x-admin.input type="text" id="client" name="client" value="Walking Customer"
                                required></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="products">Select Products *</x-admin.label>
                            <x-admin.input type="text" id="products" name="products" placeholder="Search products"
                                required></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="discount_type">Discount Type</x-admin.label>
                            <x-admin.select-option id="discount_type" name="discount_type">
                                <option value="fixed">Fixed</option>
                                <option value="percentage">Percentage</option>
                            </x-admin.select-option>
                        </div>

                        <div>
                            <x-admin.label for="discount">Discount</x-admin.label>
                            <x-admin.input type="text" id="discount" name="discount"
                                placeholder="Enter discount"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="invoice_tax">Invoice Tax *</x-admin.label>
                            <x-admin.select-option id="invoice_tax" name="invoice_tax" required>
                                <option value="VAT@0">VAT@0</option>
                                <option value="VAT@5">VAT@5</option>
                                <option value="VAT@10">VAT@10</option>
                            </x-admin.select-option>
                        </div>

                        <div>
                            <x-admin.label for="total_tax">Total Tax</x-admin.label>
                            <x-admin.input type="text" id="total_tax" name="total_tax" value="0"
                                readonly></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="transport_cost">Transport Cost</x-admin.label>
                            <x-admin.input type="text" id="transport_cost" name="transport_cost"
                                placeholder="Enter transport cost"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="po_reference">PO Reference</x-admin.label>
                            <x-admin.input type="text" id="po_reference" name="po_reference"
                                placeholder="Enter PO reference"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="delivery_place">Delivery Place</x-admin.label>
                            <x-admin.input type="text" id="delivery_place" name="delivery_place"
                                placeholder="Enter a delivery place"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="payment_terms">Payment Terms</x-admin.label>
                            <x-admin.input type="text" id="payment_terms" name="payment_terms"
                                placeholder="Enter payment terms"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="date">Date</x-admin.label>
                            <x-admin.input type="date" id="date" name="date"
                                value="2024-10-02"></x-admin.input>
                        </div>

                        <div>
                            <x-admin.label for="status">Status</x-admin.label>
                            <x-admin.select-option id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </x-admin.select-option>
                        </div>

                        <div>
                            <x-admin.label for="add_payment">Add Payment?</x-admin.label>
                            <x-admin.select-option id="add_payment" name="add_payment">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </x-admin.select-option>
                        </div>

                        <div>
                            <x-admin.label for="note">Note</x-admin.label>
                            <textarea id="note" class="form-control form-control-sm" name="note" placeholder="Write your note here!"></textarea>
                        </div>

                        <div>
                            <input type="checkbox" id="send_to_email" name="send_to_email"></input>
                            <x-admin.label for="send_to_email">Send To Email</x-admin.label>
                        </div>

                        <div>
                            <input type="checkbox" id="send_to_sms" name="send_to_sms"></input>
                            <x-admin.label for="send_to_sms">Send To SMS</x-admin.label>
                        </div>

                        <x-admin.button type="submit" class="primary">Edit
                            Category</x-admin.button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
