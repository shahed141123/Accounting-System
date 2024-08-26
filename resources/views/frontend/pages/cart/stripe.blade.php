<x-frontend-app-layout :title="'Make Payment'">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex align-items-center">
                    <div class="card my-5 p-5 border-0 shadow-sm w-50 bg-light" style="height: 300px">
                        <div class="card-body">
                            <h3 class="mb-5">Payment Info</h3>
                            <div class="d-flex justify-content-between align-items-center ">
                                <h5>Product</h5>
                                <h5>5</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pb-4">
                                <h5>Total Ammount</h5>
                                <h5>€ <span class="text-info">5000</span></h5>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center pt-4">
                                <h5>Order Id</h5>
                                <h5>#1as5000</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Payment Methods</h5>
                                <h5>Stripe</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Order Date</h5>
                                <h5>25 Aug 2024</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card my-5 border-0 shadow-lg w-50">
                        <div class="card-body p-5">
                            <h3>Payment Methods (Stripe)</h3>
                            <div class="row pt-5">
                                <div class="mb-3 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-8">
                                    <label for="exampleInputEmail1" class="form-label">Expired</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="exampleInputEmail1" class="form-label">CVV</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mt-5 col-12">
                                    <button class="btn btn-warning w-100 p-4 text-white">Pay $5600</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
