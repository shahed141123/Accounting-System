<x-frontend-app-layout :title="'Quick Order'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
    <div class="ps-shopping">
        <div class="user-dashboard py-8">
            <div class="container">
                <div class="row g-3 g-xl-4 tab-wrap">
                    <div class="col-lg-4 col-xl-3 sticky">
                        <!-- Sidebar here -->
                        @include('user.layouts.sidebar')
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="row">
                            <h3 class="ps-shopping__title mb-0">Quick Order<sup>(0)</sup></h3>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="ps-shopping__footer pt-3 mb-3">
                                    <div class="ps-shopping__coupon">
                                        <input class="form-control ps-input" type="text"
                                            placeholder="Search your product">
                                        <button class="ps-btn ps-btn--primary" type="button">Product Search</button>
                                    </div>
                                    <div class="ps-shopping__button">
                                        <button class="ps-btn ps-btn--primary" type="button">Add To Cart</button>
                                        <button class="ps-btn ps-btn--primary" type="button">Checkout</button>
                                    </div>
                                </div>
                                <ul class="ps-shopping__list">
                                    <li>
                                        <div class="ps-product ps-product--wishlist">
                                            <div class="ps-product__remove"><a href="#"><i
                                                        class="icon-cross"></i></a>
                                            </div>
                                            <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                    href="product1.html">
                                                    <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                            alt="alt">
                                                    </figure>
                                                </a></div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title"><a href="product1.html">Somersung Sonic
                                                        X2500 Pro
                                                        White</a></h5>
                                                <div class="ps-product__row">
                                                    <div class="ps-product__label">Price:</div>
                                                    <div class="ps-product__value"><span
                                                            class="ps-product__price">$399.99</span>
                                                    </div>
                                                </div>
                                                <div class="ps-product__row ps-product__stock">
                                                    <div class="ps-product__label">Stock:</div>
                                                    <div class="ps-product__value"><span class="ps-product__in-stock">In
                                                            Stock</span>
                                                    </div>
                                                </div>
                                                <div class="ps-product__cart">
                                                    <button class="ps-btn">Add to cart</button>
                                                </div>
                                                <div class="ps-product__row ps-product__quantity">
                                                    <div class="ps-product__label">Quantity:</div>
                                                    <div class="ps-product__value">1</div>
                                                </div>
                                                <div class="ps-product__row ps-product__subtotal">
                                                    <div class="ps-product__label">Subtotal:</div>
                                                    <div class="ps-product__value">$399.99</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="ps-shopping__table">
                                    <table class="table ps-table ps-table--product">
                                        <thead class="thead-light">
                                            <tr>
                                                <th width="5%">
                                                    Sl
                                                </th>
                                                <th width="">Image</th>
                                                <th width="">Product Name</th>
                                                <th width="">Unit Price</th>
                                                <th width="">Quantity</th>
                                                <th width="">Subtotal</th>
                                                <th width="5%">
                                                    <i class="fa fa-trash" title="delete quick order"></i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td class=""><a class="ps-product__image" href="product1.html">
                                                        <figure><img src="{{ asset('frontend/img/products/003.jpg') }}"
                                                                alt="">
                                                        </figure>
                                                    </a></td>
                                                <td class=""> <a href="product1.html">Somersung Sonic
                                                        X2500
                                                        Pro White</a></td>
                                                <td class=""> <span class="ps-product__price">$399.99</span>
                                                </td>
                                                <td class=""><span>1</span>
                                                </td>
                                                <td class="">$399.99</td>
                                                <td class="">
                                                    <a href="#"><i class="icon-cross"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td class="">
                                                    <a class="ps-product__image" href="product1.html">
                                                        <img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </td>
                                                <td class=""> <a href="product1.html">Digital
                                                        Thermometer
                                                        X30-Pro</a></td>
                                                <td class=""> <span
                                                        class="ps-product__price sale">$77.65</span><span
                                                        class="ps-product__del">$80.65</span>
                                                </td>
                                                <td class="">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity"
                                                            value="1" type="number">
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                class="icon-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td class="">$77.65</td>
                                                <td class="">
                                                    <a href="#"><i class="icon-cross"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 offset-6 col-lg-6">
                                <div class="ps-shopping__checkout text-right"><a class="ps-btn ps-btn--warning"
                                        href="checkout.html">Proceed to checkout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="ps-section--latest mb-0">
                        <div class="container">
                            <h3 class="ps-section__title mt-50">You may be interested in…</h3>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ps-section__carousel pb-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                        href="product-details.html">
                                                        <figure><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt"><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt">
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="#"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Quick view"><a href="#"
                                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                                    class="fa fa-search"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"
                                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a
                                                            href="product-details.html">3-layer mask
                                                            with an
                                                            elastic band (1 piece)</a></h5>
                                                    <div class="ps-product__meta"><span
                                                            class="ps-product__price sale">£9.99</span><span
                                                            class="ps-product__del">$38.24</span>
                                                    </div>
                                                    <div class="ps-product__rating">
                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                                class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4
                                                                </option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <div class="br-widget br-readonly"><a href="#"
                                                                    data-rating-value="1" data-rating-text="1"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="2" data-rating-text="2"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="3" data-rating-text="3"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="4" data-rating-text="4"
                                                                    class="br-selected br-current"></a><a
                                                                    href="#" data-rating-value="5"
                                                                    data-rating-text="5"></a>
                                                                <div class="br-current-rating">4</div>
                                                            </div>
                                                        </div><span class="ps-product__review">( Reviews)</span>
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
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart"> <a
                                                                class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">Add to
                                                                cart</a></div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item rotate" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to compare"><a
                                                                href="compare.html"><i
                                                                    class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ps-section__carousel pb-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                        href="product-details.html">
                                                        <figure><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt"><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt">
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="#"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Quick view"><a href="#"
                                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                                    class="fa fa-search"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"
                                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a
                                                            href="product-details.html">3-layer mask
                                                            with an
                                                            elastic band (1 piece)</a></h5>
                                                    <div class="ps-product__meta"><span
                                                            class="ps-product__price sale">£9.99</span><span
                                                            class="ps-product__del">$38.24</span>
                                                    </div>
                                                    <div class="ps-product__rating">
                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                                class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4
                                                                </option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <div class="br-widget br-readonly"><a href="#"
                                                                    data-rating-value="1" data-rating-text="1"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="2" data-rating-text="2"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="3" data-rating-text="3"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="4" data-rating-text="4"
                                                                    class="br-selected br-current"></a><a
                                                                    href="#" data-rating-value="5"
                                                                    data-rating-text="5"></a>
                                                                <div class="br-current-rating">4</div>
                                                            </div>
                                                        </div><span class="ps-product__review">( Reviews)</span>
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
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart"> <a
                                                                class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">Add to
                                                                cart</a></div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item rotate" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to compare"><a
                                                                href="compare.html"><i
                                                                    class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ps-section__carousel pb-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                        href="product-details.html">
                                                        <figure><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt"><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt">
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="#"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Quick view"><a href="#"
                                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                                    class="fa fa-search"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"
                                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a
                                                            href="product-details.html">3-layer mask
                                                            with an
                                                            elastic band (1 piece)</a></h5>
                                                    <div class="ps-product__meta"><span
                                                            class="ps-product__price sale">£9.99</span><span
                                                            class="ps-product__del">$38.24</span>
                                                    </div>
                                                    <div class="ps-product__rating">
                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                                class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4
                                                                </option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <div class="br-widget br-readonly"><a href="#"
                                                                    data-rating-value="1" data-rating-text="1"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="2" data-rating-text="2"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="3" data-rating-text="3"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="4" data-rating-text="4"
                                                                    class="br-selected br-current"></a><a
                                                                    href="#" data-rating-value="5"
                                                                    data-rating-text="5"></a>
                                                                <div class="br-current-rating">4</div>
                                                            </div>
                                                        </div><span class="ps-product__review">( Reviews)</span>
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
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart"> <a
                                                                class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">Add to
                                                                cart</a></div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item rotate" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to compare"><a
                                                                href="compare.html"><i
                                                                    class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ps-section__carousel pb-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                        href="product-details.html">
                                                        <figure><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt"><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt">
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="#"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Quick view"><a href="#"
                                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                                    class="fa fa-search"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"
                                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a
                                                            href="product-details.html">3-layer mask
                                                            with an
                                                            elastic band (1 piece)</a></h5>
                                                    <div class="ps-product__meta"><span
                                                            class="ps-product__price sale">£9.99</span><span
                                                            class="ps-product__del">$38.24</span>
                                                    </div>
                                                    <div class="ps-product__rating">
                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                                class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4
                                                                </option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <div class="br-widget br-readonly"><a href="#"
                                                                    data-rating-value="1" data-rating-text="1"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="2" data-rating-text="2"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="3" data-rating-text="3"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="4" data-rating-text="4"
                                                                    class="br-selected br-current"></a><a
                                                                    href="#" data-rating-value="5"
                                                                    data-rating-text="5"></a>
                                                                <div class="br-current-rating">4</div>
                                                            </div>
                                                        </div><span class="ps-product__review">( Reviews)</span>
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
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart"> <a
                                                                class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">Add to
                                                                cart</a></div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item rotate" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to compare"><a
                                                                href="compare.html"><i
                                                                    class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ps-section__carousel pb-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                        href="product-details.html">
                                                        <figure><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt"><img
                                                                src="{{ asset('frontend/img/products/medicine3.jpg') }}"
                                                                alt="alt">
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="#"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Quick view"><a href="#"
                                                                data-toggle="modal" data-target="#popupQuickview"><i
                                                                    class="fa fa-search"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"
                                                                data-toggle="modal" data-target="#popupAddcart"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Sale</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a
                                                            href="product-details.html">3-layer mask
                                                            with an
                                                            elastic band (1 piece)</a></h5>
                                                    <div class="ps-product__meta"><span
                                                            class="ps-product__price sale">£9.99</span><span
                                                            class="ps-product__del">$38.24</span>
                                                    </div>
                                                    <div class="ps-product__rating">
                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                                class="ps-rating" data-read-only="true"
                                                                style="display: none;">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4
                                                                </option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <div class="br-widget br-readonly"><a href="#"
                                                                    data-rating-value="1" data-rating-text="1"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="2" data-rating-text="2"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="3" data-rating-text="3"
                                                                    class="br-selected"></a><a href="#"
                                                                    data-rating-value="4" data-rating-text="4"
                                                                    class="br-selected br-current"></a><a
                                                                    href="#" data-rating-value="5"
                                                                    data-rating-text="5"></a>
                                                                <div class="br-current-rating">4</div>
                                                            </div>
                                                        </div><span class="ps-product__review">( Reviews)</span>
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
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="0"
                                                                    name="quantity" value="1" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart"> <a
                                                                class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">Add to
                                                                cart</a></div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to cart"><a href="#"><i
                                                                    class="fa fa-shopping-basket"></i></a></div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></div>
                                                        <div class="ps-product__item rotate" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Add to compare"><a
                                                                href="compare.html"><i
                                                                    class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(function() {
                // Owl Carousel
                var owl = $(".owl-carousel");
                owl.owlCarousel({
                    items: 3,
                    margin: 10,
                    loop: true,
                    nav: true,
                    dots: false, // Ensures that dot indicators are not shown
                    autoplay: true, // Enables autoplay
                    autoplayTimeout: 3000, // Time in milliseconds (3000ms = 3 seconds)
                    autoplayHoverPause: true, // Pause on mouse hover
                    responsive: {
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        },
                        1680: {
                            items: 5
                        }
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
