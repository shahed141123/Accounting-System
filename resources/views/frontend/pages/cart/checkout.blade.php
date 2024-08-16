<x-frontend-app-layout :title="'Checkout'">
    <div class="ps-checkout">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('home') }}">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    Checkout
                </li>
            </ul>
            <h3 class="ps-checkout__title">Checkout</h3>
            <div class="ps-checkout__content">
                {{-- <div class="ps-checkout__wapper">
                    <p class="ps-checkout__text">
                        Returning customer?
                        <a href="my-account.html">Click here to login</a>
                    </p>
                    <p class="ps-checkout__text">
                        Have a coupon?
                        <a href="shopping-cart.html">Click here to enter your code</a>
                    </p>
                </div> --}}
                <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="ps-checkout__form">
                                <h3 class="ps-checkout__heading">Billing details</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Email address *</label>
                                            <input class="ps-input" type="email" name="billing_email" value="{{ old('billing_email',$user->email) }}" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">First name *</label>
                                            <input class="ps-input" type="text" name="billing_first_name" value="{{ old('billing_first_name',$user->first_name) }}" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Last name *</label>
                                            <input class="ps-input" type="text" name="billing_last_name" value="{{ old('billing_last_name',$user->last_name) }}" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Company name (optional)</label>
                                            <input class="ps-input" type="text" name="billing_company_name" value="{{ old('billing_company_name',$user->company_name) }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Street address *</label>
                                            <input class="ps-input mb-3" type="text" name="billing_address_1" value="{{ old('billing_address_1',$user->address_one) }}"
                                                placeholder="House number and street name" required />
                                            <input class="ps-input" type="text" name="billing_address_2" value="{{ old('billing_address_2',$user->address_two) }}"
                                                placeholder="Apartment, suite, unit, etc. (optional)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Town / City *</label>
                                            <input class="ps-input" type="text" name="billing_city" value="{{ old('billing_city',$user->state) }}" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Postcode *</label>
                                            <input class="ps-input" type="text" name="billing_postcode" value="{{ old('billing_postcode',$user->zipcode) }}" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">County (optional)</label>
                                            <input class="ps-input" type="text" name="billing_county" value="{{ old('billing_county',$user->) }}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Phone *</label>
                                            <input class="ps-input" type="text" name="billing_phone" value="{{ old('billing_phone',$user->phone) }}" required />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="ship-address" />
                                                <label class="form-check-label" for="ship-address">Ship to a different
                                                    address?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ps-hidden" data-for="ship-address">
                                        <h3 class="ps-checkout__heading">Shipping details</h3>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">First name *</label>
                                                    <input class="ps-input" type="text" name="shipping_first_name"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Last name *</label>
                                                    <input class="ps-input" type="text" name="shipping_last_name"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Company name (optional)</label>
                                                    <input class="ps-input" type="text"
                                                        name="shipping_company_name" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Street address *</label>
                                                    <input class="ps-input mb-3" type="text"
                                                        name="shipping_address_1"
                                                        placeholder="House number and street name" required />
                                                    <input class="ps-input" type="text" name="shipping_address_2"
                                                        placeholder="Apartment, suite, unit, etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Town / City *</label>
                                                    <input class="ps-input" type="text" name="shipping_city"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">Postcode *</label>
                                                    <input class="ps-input" type="text" name="shipping_postcode"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="ps-checkout__group">
                                                    <label class="ps-checkout__label">County (optional)</label>
                                                    <input class="ps-input" type="text" name="shipping_county" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">Order notes (optional)</label>
                                            <textarea class="ps-textarea" name="order_note" rows="7"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="ps-checkout__order">
                                <h3 class="ps-checkout__heading">Your order</h3>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Product</div>
                                    <div class="ps-title">Subtotal</div>
                                </div>
                                @foreach ($cartItems as $cartItem)
                                    <div class="ps-checkout__row ps-product">
                                        <div class="ps-product__name">
                                            <a
                                                href="{{ route('product.details', $cartItem->model->slug) }}">{{ $cartItem->model->name }}</a>
                                            x <span>{{ $cartItem->qty }}</span>
                                        </div>
                                        <div class="ps-product__price">
                                            £{{ number_format($cartItem->price * $cartItem->qty, 2) }}</div>
                                    </div>
                                @endforeach
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Subtotal</div>
                                    <div class="ps-product__price">£{{ number_format($subTotal, 2) }}</div>
                                </div>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Shipping <span class="text-danger">*</span></div>
                                    <div class="ps-checkout__checkbox">
                                        @foreach ($shippingmethods as $shippingmethod)
                                            <div class="form-check">
                                                <input class="form-check-input" name="shipping_id" type="radio"
                                                    id="shipping-{{ $shippingmethod->id }}"
                                                    data-shipping_price="{{ $shippingmethod->price }}"
                                                    value="{{ $shippingmethod->id }}" />
                                                <label class="form-check-label"
                                                    for="shipping-{{ $shippingmethod->id }}">{{ $shippingmethod->title }}
                                                    <span>(£{{ number_format($shippingmethod->price, 2) }})</span></label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Total</div>
                                    <div class="ps-product__price" id="total-price-container">
                                        <input type="hidden" name="total_amount" id="total-input"
                                            value="{{ number_format($subTotal, 2) }}">
                                        £<span id="total-price"
                                            style="font-weight: 600;">{{ number_format($subTotal, 2) }}</span>
                                    </div>
                                </div>
                                <div class="ps-checkout__payment">
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">Payment Method</div>
                                        <div class="ps-checkout__checkbox">
                                            <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="cod" value="cod" checked />
                                                <label class="form-check-label" for="cod">COD</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="stripe" value="stripe" />
                                                <label class="form-check-label" for="stripe">Stripe</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="payment_method" type="radio"
                                                    id="paypal" value="paypal" />
                                                <label class="form-check-label" for="paypal">PayPal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-faq">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree-faq" checked
                                                required />
                                            <label class="form-check-label" for="agree-faq">
                                                I have read and agree to the website terms and conditions *</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="ps-btn ps-btn--warning">
                                        Place order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const subtotal = parseFloat('{{ $subTotal }}');
                const totalInput = document.getElementById('total-input');
                const totalPriceSpan = document.getElementById('total-price');

                document.querySelectorAll('input[name="shipping_id"]').forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        const shippingPrice = parseFloat(this.getAttribute('data-shipping_price')) || 0;
                        const total = subtotal + shippingPrice;

                        console.log('Shipping Price:', shippingPrice);
                        console.log('Calculated Total:', total);

                        totalInput.value = total.toFixed(2);
                        totalPriceSpan.textContent = total.toFixed(2);
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
