<x-frontend-app-layout :title="'Stock History'">
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffffff;
            background-color: #029f9a;
            border-color: #dee2e6 #dee2e6 #fff;
        }
    </style>
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
                    <div class="col-lg-3 col-xl-3 sticky">
                        <!-- Sidebar here -->
                        @include('user.layouts.sidebar')
                    </div>
                    <div class="col-lg-9 col-xl-9">
                        <div class="row g-5 bg-light p-3">
                            <div class="col-lg-3 pl-0">
                                <div class="shadow-sm">
                                    <p class="pt-2 pl-3">Product Category</p>
                                    <nav>
                                        <div class="nav nav-tabs flex-column border-0" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="homewares-tab" data-toggle="tab"
                                                href="#homewares" role="tab" aria-controls="homewares"
                                                aria-selected="true">Homewares</a>
                                            <a class="nav-item nav-link" id="pestControl-tab" data-toggle="tab"
                                                href="#pestControl" role="tab" aria-controls="pestControl"
                                                aria-selected="false">Pest Control</a>
                                            <a class="nav-item nav-link" id="catering-tab" data-toggle="tab"
                                                href="#catering" role="tab" aria-controls="catering"
                                                aria-selected="false">Catering</a>
                                            <a class="nav-item nav-link" id="gardenLighting" data-toggle="tab"
                                                href="#gardenLighting" role="tab" aria-controls="gardenLighting"
                                                aria-selected="false">Garden Lighting</a>
                                            <a class="nav-item nav-link" id="games-tab" data-toggle="tab" href="#games"
                                                role="tab" aria-controls="games" aria-selected="false">Games</a>
                                            <a class="nav-item nav-link" id="BBQ-tab" data-toggle="tab" href="#BBQ"
                                                role="tab" aria-controls="BBQ" aria-selected="false">BBQ</a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-9 pl-0">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="homewares" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <!-- Order History Table -->
                                        <h4>Homewares Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pestControl" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <!-- Order History Table -->
                                        <h4>Pest Control Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="catering" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <!-- Order History Table -->
                                        <h4>Catering Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="gardenLighting" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <!-- Order History Table -->
                                        <h4>Garden Lighting Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="games" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <!-- Order History Table -->
                                        <h4>Games Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="BBQ" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <!-- Order History Table -->
                                        <h4>BBQ Category Product Stocks</h4>
                                        <table class="table table-striped order-history-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>SKU</th>
                                                    <th>Status</th>
                                                    <th>Total QTY</th>
                                                    <th>In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Example Row -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div>
                                                            <img src="#" class="" width="50px"
                                                                height="50px" alt="">
                                                        </div>
                                                    </td>
                                                    <td>Thie Shoup Spoon</td>
                                                    <td>#sku354</td>
                                                    <td>
                                                        <span class="badge bg-info text-white">Available</span>
                                                    </td>
                                                    <td>555</td>
                                                    <td>105</td>
                                                </tr>
                                                <!-- Additional rows go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-frontend-app-layout>
