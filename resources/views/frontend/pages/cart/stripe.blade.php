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
                                <h5>{{ $order->quantity }}</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pb-4">
                                <h5>Total Ammount</h5>
                                <h5>€ <span class="text-info">{{ $order->total_amount }}</span></h5>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center pt-4">
                                <h5>Order Id</h5>
                                <h5>#{{ $order->order_number }}</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Payment Methods</h5>
                                <h5>{{ ucfirst($order->payment_method) }}</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Order Date</h5>
                                <h5>{{ $order->order_created_at->format('d M, Y') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card my-5 border-0 shadow-lg w-50">
                        <div class="card-body p-5">
                            <h3>Payment Methods (Stripe)</h3>
                            <div class="row pt-5">
                                <form id='checkout-form' method='post' action="{{ route('stripe.pay') }}">
                                    @csrf
                                    <input type='hidden' name='ammount' value='{{ $order->total_amount }}'>
                                    <input type='hidden' name='order_number' value='{{ $order->order_number }}'>
                                    <br>
                                    <div class="mb-3 col-12">
                                        <div id="card-element" class="form-control"></div>
                                    </div>

                                    <div class="mt-5 col-12">
                                        <button id='pay-btn' class="btn btn-warning w-100 p-4 text-white"
                                            onclick="createToken()">Pay € {{ $order->total_amount }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script type="text/javascript">
            var stripe = Stripe('{{ env('STRIPE_KEY') }}')
            var elements = stripe.elements();
            var cardElement = elements.create('card');
            cardElement.mount('#card-element');

            function createToken(event) {
                event.preventDefault(); // Prevent default form submission
                document.getElementById("pay-btn").disabled = true;

                stripe.createToken(cardElement).then(function(result) {
                    if (result.error) {
                        document.getElementById("pay-btn").disabled = false;
                        alert(result.error.message);
                    } else {
                        var form = document.getElementById('checkout-form');
                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', result.token.id);
                        form.appendChild(hiddenInput);
                        form.submit();
                    }
                });
            }
        </script>
    @endpush
</x-frontend-app-layout>
