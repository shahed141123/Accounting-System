<x-frontend-app-layout :title="'My Cart'">
    <div class="ps-shopping">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    Shopping cart
                </li>
            </ul>
            <h3 class="ps-shopping__title">Shopping cart<sup>(co)</sup></h3>
            <div class="ps-shopping__content">
                @if ($cartItems->Count() > 0)
                    <div class="row">
                        <div class="col-12 col-md-7 col-lg-9">
                            <ul class="ps-shopping__list">
                                @foreach ($cartItems as $item)
                                    <li>
                                        <div class="ps-product ps-product--wishlist">
                                            <div class="ps-product__remove">
                                                <a href="#"><i class="icon-cross"></i></a>
                                            </div>
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image" href="{{ route('product.details',$item->model->slug) }}">
                                                    <figure>
                                                        <img src="{{ asset('storage/'.$item->model->image) }}" alt />
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.details',$item->model->slug) }}">{{$item->model->name}}</a>
                                                </h5>
                                                <div class="ps-product__row">
                                                    <div class="ps-product__label">Price:</div>
                                                    <div class="ps-product__value">
                                                        <span class="ps-product__price">£{{ $item->price }}</span>
                                                    </div>
                                                </div>
                                                <div class="ps-product__row ps-product__stock">
                                                    <div class="ps-product__label">Stock:</div>
                                                    <div class="ps-product__value">
                                                        <span class="ps-product__in-stock">In Stock</span>
                                                    </div>
                                                </div>
                                                <div class="ps-product__cart">
                                                    <button class="ps-btn">Add to cart</button>
                                                </div>
                                                <div class="ps-product__row ps-product__quantity">
                                                    <div class="ps-product__label">Quantity:</div>
                                                    <div class="ps-product__value">{{ $item->qty }}</div>
                                                </div>
                                                <div class="ps-product__row ps-product__subtotal">
                                                    <div class="ps-product__label">Subtotal:</div>
                                                    <div class="ps-product__value">£{{ ($item->price) * ($item->qty)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="ps-shopping__table">
                                <table class="table ps-table ps-table--product">
                                    <thead>
                                        <tr>
                                            <th class="ps-product__remove"></th>
                                            <th class="ps-product__thumbnail"></th>
                                            <th class="ps-product__name">Product name</th>
                                            <th class="ps-product__meta">Unit price</th>
                                            <th class="ps-product__quantity">Quantity</th>
                                            <th class="ps-product__subtotal">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td class="ps-product__remove">
                                                    <a href="#"><i class="icon-cross"></i></a>
                                                </td>
                                                <td class="ps-product__thumbnail">
                                                    <a class="ps-product__image" href="{{ route('product.details',$item->model->slug) }}">
                                                        <figure>
                                                            <img src="{{ asset('storage/'.$item->model->thumbnail) }}" alt />
                                                        </figure>
                                                    </a>
                                                </td>
                                                <td class="ps-product__name">
                                                    <a href="{{ route('product.details',$item->model->slug) }}">{{$item->model->name}}</a>
                                                </td>
                                                <td class="ps-product__meta">
                                                    <span class="ps-product__price">£{{ $item->price }}</span>
                                                </td>
                                                <td class="ps-product__quantity"><span>{{ $item->qty }}</span></td>
                                                <td class="ps-product__subtotal">£{{ ($item->price) * ($item->qty)}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="ps-shopping__footer">
                                {{-- <div class="ps-shopping__coupon">
                                    <input class="form-control ps-input" type="text" placeholder="Coupon code" />
                                    <button class="ps-btn ps-btn--primary" type="button">
                                        Apply coupon
                                    </button>
                                </div> --}}
                                <div class="ps-shopping__button">
                                    <button class="ps-btn ps-btn--primary" type="button">
                                        Clear All
                                    </button>
                                    <button class="ps-btn ps-btn--primary" type="button">
                                        Update cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <div class="ps-shopping__label">Cart totals</div>
                            <div class="ps-shopping__box">
                                <div class="ps-shopping__row">
                                    <div class="ps-shopping__label">Subtotal</div>
                                    <div class="ps-shopping__price">£{{ Cart::subtotal() }}</div>
                                </div>
                                <div class="ps-shopping__label">Shipping</div>
                                <div class="ps-shopping__checkbox">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="cart-free-ship" checked />
                                        <label class="form-check-label" for="cart-free-ship">Free shipping</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="cart-ship" />
                                        <label class="form-check-label" for="cart-ship">Local Pickup: $10.00</label>
                                    </div>
                                </div>
                                <div class="ps-shopping__text">
                                    Shipping options will be updated during checkout.
                                </div>
                                <a class="ps-shopping__toggle" href="#">Calculate shipping</a>
                                <div class="ps-shopping__form">
                                    <div class="ps-shopping__group">
                                        <select class="js-example-basic-single" name="state">
                                            <option selected>Select a country / region…</option>
                                            <option>Afghanistan</option>
                                            <option>Åland Islands</option>
                                            <option>Albania</option>
                                            <option>Andorra</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                        </select>
                                    </div>
                                    <div class="ps-shopping__group">
                                        <input class="form-control ps-input" type="text" placeholder="County" />
                                    </div>
                                    <div class="ps-shopping__group">
                                        <input class="form-control ps-input" type="text"
                                            placeholder="Town / City" />
                                    </div>
                                    <div class="ps-shopping__group">
                                        <input class="form-control ps-input" type="text" placeholder="Postcode" />
                                    </div>
                                </div>
                                <div class="ps-shopping__row">
                                    <div class="ps-shopping__label">Total</div>
                                    <div class="ps-shopping__price">£{{ Cart::subtotal() }}</div>
                                </div>
                                <div class="ps-shopping__checkout">
                                    <a class="ps-btn ps-btn--warning" href="checkout.html">Proceed to checkout</a><a
                                        class="ps-shopping__link" href="category-list.html">Continue To Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Your cart is empty !</h2>
                            <h5 class="mt-3">Add Items to it now.</h5>
                            <a href="{{ route('all.products') }}" class="btn btn-warning mt-5">
                                Shop Now
                            </a>
                        </div>
                    </div>
                @endif
                <section class="ps-section--latest">
                    <div class="container">
                        <h3 class="ps-section__title">You may be interested in…</h3>
                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true"
                                data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                                data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
                                data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000"
                                data-owl-mousedrag="on">
                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image" href="product-details.html">
                                                <figure>
                                                    <img src="img/products/medicine1.jpg" alt="alt" /><img
                                                        src="img/products/medicine3.jpg" alt="alt" />
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Quick view">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#popupAddcart"><i
                                                            class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--sale">Sale</div>
                                            </div>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">
                                                <a href="product-details.html">3-layer mask with an elastic band (1
                                                    piece)</a>
                                            </h5>
                                            <div class="ps-product__meta">
                                                <span class="ps-product__price sale">£9.99</span><span
                                                    class="ps-product__del">$38.24</span>
                                            </div>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span class="ps-product__review">( Reviews)</span>
                                            </div>
                                            <div class="ps-product__desc">
                                                <ul class="ps-product__list">
                                                    <li>Study history up to 30 days</li>
                                                    <li>Up to 5 users simultaneously</li>
                                                    <li>Has HEALTH certificate</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__quantity">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="icon-minus"></i>
                                                        </button>
                                                        <input class="quantity" min="0" name="quantity"
                                                            value="1" type="number" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ps-product__cart">
                                                    <a class="ps-btn ps-btn--warning" href="#"
                                                        data-toggle="modal" data-target="#popupAddcart">Add to
                                                        cart</a>
                                                </div>
                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart">
                                                    <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="ps-product__item rotate" data-toggle="tooltip"
                                                    data-placement="left" title="Add to compare">
                                                    <a href="compare.html"><i class="fa fa-align-left"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
