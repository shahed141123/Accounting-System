<x-frontend-app-layout :title="'Your Order History'">
    <div class="breadcrumb-wrap">
        <div class="banner b-top bg-size bread-img">
            <img class="bg-img bg-top" src="img/banner-p.jpg" alt="banner" style="display: none;">
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="title-box3 text-center">
                        <h1>
                            <span class="text-info">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                            <br>Welcome To Your Dashboard
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-account">
        <section class="user-dashboard py-8">
            <div class="container">
                <div class="row g-3 g-xl-4 tab-wrap">
                    <div class="col-lg-4 col-xl-3 sticky">
                        <!-- Sidebar here -->
                        @include('user.layouts.sidebar')
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Order History List</h4>
                                <table class="table table-striped order-history-table">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Total Amount</th>
                                            <th>Payment Status</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        @foreach ($orders as $order)
                                            <tr class="text-start">
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->created_at->format('d M, Y') }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td><span class="text-info fw-bold">£</span>{{ $order->total_amount }}
                                                </td>
                                                <td>
                                                    @if ($order->payment_status == 'unpaid')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-danger">Unpaid</span>
                                                    @elseif ($order->payment_status == 'paid')
                                                        <span class="badge p-2 rounded-3 fs-7 badge-success">Paid</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-primary">Pending</span>
                                                    @elseif ($order->status == 'processing')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-warning">Processing</span>
                                                    @elseif ($order->status == 'shipped')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-success">Shipped</span>
                                                    @elseif ($order->status == 'delivered')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-success">Delivered</span>
                                                    @elseif ($order->status == 'cancelled')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-dangered">Cancelled</span>
                                                    @elseif ($order->status == 'returned')
                                                        <span
                                                            class="badge p-2 rounded-3 fs-7 badge-dangered">Returned</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="pr-3" data-toggle="modal" data-target="#showInvoice">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#orderInvoice">
                                                        <i class="fa-solid fa-print"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- Additional rows go here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showInvoice" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="showInvoiceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showInvoiceLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('frontend.')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="orderInvoice" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="orderInvoiceInvoiceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderInvoiceLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
