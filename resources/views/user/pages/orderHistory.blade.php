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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->created_at->format('d M, Y') }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td><span class="text-info fw-bold">£</span>{{ $order->total_amount }}
                                                </td>
                                                <td>
                                                    @if ($order->payment_status == 'unpaid')
                                                        <span class="badge py-3 px-4 fs-7 badge-danger">Unpaid</span>
                                                    @elseif ($order->payment_status == 'paid')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-success">Paid</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-primary">Pending</span>
                                                    @elseif ($order->status == 'processing')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-warning">Processing</span>
                                                    @elseif ($order->status == 'shipped')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    @elseif ($order->status == 'delivered')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-success">Delivered</span>
                                                    @elseif ($order->status == 'cancelled')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-dangered">Cancelled</span>
                                                    @elseif ($order->status == 'returned')
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-dangered">Returned</span>
                                                    @endif
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
</x-frontend-app-layout>
