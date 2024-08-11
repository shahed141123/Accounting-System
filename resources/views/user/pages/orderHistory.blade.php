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
                        <button class="setting-menu btn-solid btn-sm d-lg-none">Setting Menu <i
                                class="arrow"></i></button>
                        @include('user.layouts.sidebar')
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <h4>Filter Order History</h4>
                                <form id="filter-form" method="GET" action="/filter-orders">
                                    <div class="form-group">
                                        <label for="date-picker">Select Dates</label>
                                        <!-- Date Picker Input -->
                                        <input type="text" id="date-picker" class="form-control" name="dates"
                                            placeholder="Select dates" />
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Filter</button>
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <h4>Order History Table</h4>
                                <!-- Order History Table -->
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Row -->
                                        <tr>
                                            <td>12345</td>
                                            <td>August 10, 2024</td>
                                            <td>3</td>
                                            <td>$150.00</td>
                                            <td>Shipped</td>
                                        </tr>
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
