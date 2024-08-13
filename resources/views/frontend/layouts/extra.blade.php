<div class="ps-navigation--footer">
    <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#"
            id="close-menu"><i class="icon-cross"></i></a></div>
    <div class="ps-nav__item"><a href="index.html"><i class="icon-home2"></i></a></div>
    <div class="ps-nav__item"><a href="my-account.html"><i class="icon-user"></i></a></div>
    <div class="ps-nav__item"><a href="wishlist.html"><i class="fa fa-heart-o"></i><span class="badge">3</span></a>
    </div>
    <div class="ps-nav__item"><a href="shopping-cart.html"><i class="icon-cart-empty"></i><span
                class="badge">2</span></a></div>
</div>
<div class="ps-menu--slidebar">
    <div class="ps-menu__content">
        <ul class="menu--mobile">
            <li class="has-mega-menu"><a href="product-category.html"> Food Packaging</a></li>
            <li class="has-mega-menu"><a href="product-category.html"> Meal Prep Essentials</a></li>
            <li class="has-mega-menu"><a href="product-category.html"> Eco-Friendly Containers</a></li>
            <li class="has-mega-menu"><a href="product-category.html"> Takeout Solutions</a></li>
            <li class="has-mega-menu"><a href="product-category.html"> Pizza Packaging</a></li>
        </ul>
    </div>
    <div class="ps-menu__footer">
        <div class="ps-menu__item">
            <div class="ps-menu__contact">Need help? <strong>0020 500 - MYMEDI - 000</strong></div>
        </div>
    </div>
</div>
<button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
<div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ps-quickview">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid ps-quickview__body">
                    <button class="close ps-quickview__close" type="button" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="ps-product--detail">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="ps-product--gallery">
                                    <div class="ps-product__thumbnail">
                                        <div class="slide"><img src="{{ asset('frontend') }}/img/products/001.jpg" alt="alt" /></div>
                                        <div class="slide"><img src="{{ asset('frontend') }}/img/products/047.jpg" alt="alt" /></div>
                                        <div class="slide"><img src="{{ asset('frontend') }}/img/products/047.jpg" alt="alt" /></div>
                                        <div class="slide"><img src="{{ asset('frontend') }}/img/products/008.jpg" alt="alt" /></div>
                                        <div class="slide"><img src="{{ asset('frontend') }}/img/products/034.jpg" alt="alt" /></div>
                                    </div>
                                    <div class="ps-gallery--image">
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="{{ asset('frontend') }}/img/products/001.jpg"
                                                    alt="alt" /></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="{{ asset('frontend') }}/img/products/047.jpg"
                                                    alt="alt" /></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="{{ asset('frontend') }}/img/products/047.jpg"
                                                    alt="alt" /></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="{{ asset('frontend') }}/img/products/008.jpg"
                                                    alt="alt" /></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="{{ asset('frontend') }}/img/products/034.jpg"
                                                    alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="ps-product__info">
                                    <div class="ps-product__badge"><span class="ps-badge ps-badge--instock"> IN
                                            STOCK</span>
                                    </div>
                                    <div class="ps-product__branch"><a href="#">HeartRate</a></div>
                                    <div class="ps-product__title"><a href="#">Blood Pressure Monitor</a></div>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><span class="ps-product__review">(5 Reviews)</span>
                                    </div>
                                    <div class="ps-product__desc">
                                        <ul class="ps-product__list">
                                            <li>Study history up to 30 days</li>
                                            <li>Up to 5 users simultaneously</li>
                                            <li>Has HEALTH certificate</li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__meta"><span class="ps-product__price">$77.65</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>Quantity</h6>
                                        <div class="d-md-flex align-items-center">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity"
                                                    value="1" type="number" />
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div><a class="ps-btn ps-btn--warning" href="#"
                                                data-toggle="modal" data-target="#popupAddcartV2">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="ps-product__type">
                                        <ul class="ps-product__list">
                                            <li> <span class="ps-list__title">Tags: </span><a class="ps-list__text"
                                                    href="#">Health</a><a class="ps-list__text"
                                                    href="#">Thermometer</a>
                                            </li>
                                            <li> <span class="ps-list__title">SKU: </span><a class="ps-list__text"
                                                    href="#">SF-006</a>
                                            </li>
                                        </ul>
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
