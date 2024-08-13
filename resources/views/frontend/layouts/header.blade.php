<style>
    .dropdown-item {
        font-size: 16px !important;
    }
</style>
<header class="ps-header ps-header--13">
    @if (!empty(optional($setting)->website_name) || !empty(optional($setting)->site_motto))
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">Welcome to {{ optional($setting)->website_name }}, {{ optional($setting)->site_motto }}
                </p>
            </div>
            <a class="ps-noti__close">
                <i class="icon-cross"></i>
            </a>
        </div>
    @endif
    <div class="ps-header__top">
        <div class="container">
            <div class="ps-header__text"> <strong>100% Secure delivery </strong>without contacting the courier </div>
            <div class="ps-top__right">
                <div class="ps-language-currency">
                    <a class="ps-dropdown-value" href="javascript:void(0);">English</a>
                    <a class="ps-dropdown-value" href="javascript:void(0);">₤</a>
                </div>
                <div class="ps-top__social">
                    <ul class="ps-social">
                        @if (optional($setting)->facebook_url)
                            <li><a class="ps-social__link facebook" href="{{ optional($setting)->facebook_url }}">
                                    <i class="fa fa-facebook"> </i>
                                    <span class="ps-tooltip">Facebook</span>
                                </a>
                            </li>
                        @endif
                        @if (optional($setting)->instagram_url)
                            <li><a class="ps-social__link instagram" href="{{ optional($setting)->instagram_url }}"><i
                                        class="fa fa-instagram"></i><span class="ps-tooltip">Instagram</span></a></li>
                        @endif
                        @if (optional($setting)->youtube_url)
                            <li><a class="ps-social__link youtube" href="{{ optional($setting)->youtube_url }}"><i
                                        class="fa fa-youtube-play"></i><span class="ps-tooltip">Youtube</span></a></li>
                        @endif
                        @if (optional($setting)->linkedin_url)
                            <li><a class="ps-social__link linkedin" href="{{ optional($setting)->linkedin_url }}"><i
                                        class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a></li>
                        @endif
                    </ul>
                </div>
                <ul class="menu-top">
                    <li class="nav-item"><a class="nav-link" href="{{ asset('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('blogs') }}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('about-us') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ asset('privacy/policy') }}">Policy</a></li>
                </ul>
                @if (!empty($setting->primary_phone))
                    <div class="ps-header__text">Need help? <strong>{{ $setting->primary_phone }}</strong></div>
                @endif
            </div>
        </div>
    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt>
                    <img class="sticky-logo"
                        src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt>
                </a>
            </div>
            <a class="ps-menu--sticky" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li><a class="ps-header__item" href="#" id="login-modal"><i class="icon-user"></i></a>
                        <div class="ps-login--modal">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <x-input-label class="form-label form__label" for="email" :value="__('Email')" />
                                    <input class="form-control" type="email" name="email" :value="old('email')"
                                        required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <x-input-label class="ps-form__label form-label" for="password" :value="__('Password')" />
                                    <div class="input-group">
                                        <x-text-input class="form-control form-control-solid ps-form__input"
                                            type="password" id="password" name="password" required
                                            autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <div
                                            class="input-group-append bg-light text-center d-flex align-items-center p-3 rounded-3 border">
                                            <a class="fa fa-eye-slash toogle-password" href="javascript:void(0);"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                                <x-primary-button class="ps-btn ps-btn--warning" type="submit">
                                    {{ __('Log in') }}
                                </x-primary-button>
                                <div class="pt-3">
                                    @if (Route::has('password.request'))
                                        <span>Lost your</span><a class="ps-account__link site_text_color_links"
                                            href="{{ route('password.request') }}"> password?</a>
                                        <span class="ps-5">Don't Have Account <a
                                                class="ps-account__link site_text_color_links"
                                                href="{{ route('register') }}">Create New Accounts</a></span>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a class="ps-header__item" href="{{ route('user.wishlist') }}">
                            <i class="fa fa-heart-o"></i>
                            <span class="badge">3</span>
                        </a>
                    </li>
                    <li><a class="ps-header__item" href="#" id="cart-mini"><i
                                class="icon-cart-empty"></i><span class="badge">2</span></a>
                        <div class="ps-cart--mini">
                            <ul class="ps-cart__items">
                                <li class="ps-cart__item">
                                    <div class="ps-product--mini-cart"><a class="ps-product__thumbnail"
                                            href="#"><img src="{{ asset('frontend/img/products/055.jpg') }}"
                                                alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name"
                                                href="#">Somersung Sonic X2500 Pro White</a>
                                            <p class="ps-product__meta"> <span
                                                    class="ps-product__price">$399.99</span></p>
                                        </div><a class="ps-product__remove" href="javascript: void(0)"><i
                                                class="icon-cross"></i></a>
                                    </div>
                                </li>
                                <li class="ps-cart__item">
                                    <div class="ps-product--mini-cart"><a class="ps-product__thumbnail"
                                            href="#"><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name"
                                                href="#">Digital Thermometer X30-Pro</a>
                                            <p class="ps-product__meta"> <span
                                                    class="ps-product__sale">$77.65</span><span
                                                    class="ps-product__is-price">$80.65</span></p>
                                        </div><a class="ps-product__remove" href="javascript: void(0)"><i
                                                class="icon-cross"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="ps-cart__total"><span>Subtotal </span><span>$399</span></div>
                            <div class="ps-cart__footer"><a class="ps-btn ps-btn--outline"
                                    href="shopping-cart.html">View Cart</a><a class="ps-btn ps-btn--warning"
                                    href="checkout.html">Checkout</a></div>
                        </div>
                    </li>
                </ul>
                <div class="ps-header__search">
                    <form action="do_action" method="post">
                        <div class="ps-search-table">
                            <div class="input-group rounded-pill">
                                <input class="form-control ps-input" type="text"
                                    placeholder="Search for products">
                                <div class="input-group-append"><a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="ps-search--result">
                        <div class="ps-result__content">
                            <div class="row m-0">
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product ps-product--horizontal">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="#">
                                                <figure><img src="img/products/052.jpg" alt="alt"></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3-layer <span
                                                        class="hightlight">mask</span> with an elastic band (1
                                                    piece)</a></h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span class="ps-product__price">$38.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product ps-product--horizontal">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="#">
                                                <figure><img src="img/products/033.jpg" alt="alt"></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3 Layer Disposable Protective Face <span
                                                        class="hightlight">mask</span>s</a></h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span
                                                    class="ps-product__price sale">$14.52</span><span
                                                    class="ps-product__del">$17.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product ps-product--horizontal">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="#">
                                                <figure><img src="img/products/051.jpg" alt="alt"></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3-Ply Ear-Loop Disposable Blue Face <span
                                                        class="hightlight">mask</span></a></h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span
                                                    class="ps-product__price sale">$14.99</span><span
                                                    class="ps-product__del">$38.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product ps-product--horizontal">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="#">
                                                <figure><img src="img/products/050.jpg" alt="alt"></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>Disposable Face <span
                                                        class="hightlight">mask</span> for Unisex</a></h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span
                                                    class="ps-product__price sale">$8.15</span><span
                                                    class="ps-product__del">$12.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-result__viewall"><a href="product-result.html">View all</a></div>
                        </div>
                    </div>
                </div>
                @if (!empty($setting->primary_phone))
                    <div class="ps-middle__text">Need help? <strong>{{ $setting->primary_phone }}</strong></div>
                @endif
            </div>
        </div>
    </div>
    <div class="ps-navigation">
        <div class="container">
            <div class="ps-navigation__left">
                <nav class="ps-main-menu">
                    <ul class="menu">
                        @foreach ($categories->slice(0, 6) as $category)
                            <li class="has-mega-menu">
                                <a href="#">{{ $category->name }}
                                    <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                </a>
                                <div class="mega-menu">
                                    <div class="container">
                                        <div class="mega-menu__row">
                                            <div class="mega-menu__column col-12 col-md-12">
                                                <div class="product-list">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                                            <div class="ps-product ps-product--standard">
                                                                <div class="ps-product__thumbnail"><a
                                                                        class="ps-product__image"
                                                                        href="product1.html">
                                                                        <figure><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/054.jpg') }}"
                                                                                alt="alt"><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/057.jpg') }}"
                                                                                alt="alt">
                                                                        </figure>
                                                                    </a>
                                                                    <div class="ps-product__actions">
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist">
                                                                            <a href="#"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupCompare"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Quick view"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupQuickview"><i
                                                                                    class="fa fa-search"></i></a></div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps-product__badge">
                                                                    </div>
                                                                </div>
                                                                <div class="ps-product__content">
                                                                    <h5 class="ps-product__title"><a
                                                                            href="product1.html">Somersung Sonic X2000
                                                                            Pro
                                                                            Black</a></h5>
                                                                    <div class="ps-product__meta"><span
                                                                            class="ps-product__price">$299.99</span>
                                                                    </div>
                                                                    <div class="ps-product__rating">
                                                                        <div
                                                                            class="br-wrapper br-theme-fontawesome-stars">
                                                                            <select class="ps-rating"
                                                                                data-read-only="true"
                                                                                style="display: none;">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4"
                                                                                    selected="selected">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                        <span class="ps-product__review">(
                                                                            Reviews)</span>
                                                                    </div>
                                                                    <div class="ps-product__desc">
                                                                        <ul class="ps-product__list">
                                                                            <li>Study history up to 30 days</li>
                                                                            <li>Up to 5 users simultaneously</li>
                                                                            <li>Has HEALTH certificate</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="ps-product__actions ps-product__group-mobile">
                                                                        <div class="ps-product__quantity">
                                                                            <div
                                                                                class="def-number-input number-input safari_only">
                                                                                <button class="minus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                        class="icon-minus"></i></button>
                                                                                <input class="quantity" min="0"
                                                                                    name="quantity" value="1"
                                                                                    type="number">
                                                                                <button class="plus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                        class="icon-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-product__cart"> <a
                                                                                class="ps-btn ps-btn--warning"
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="ps-product__item cart"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist">
                                                                            <a href="wishlist.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="compare.html"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                                            <div class="ps-product ps-product--standard">
                                                                <div class="ps-product__thumbnail"><a
                                                                        class="ps-product__image"
                                                                        href="product1.html">
                                                                        <figure><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/028.jpg') }}"
                                                                                alt="alt"><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/045.jpg') }}"
                                                                                alt="alt">
                                                                        </figure>
                                                                    </a>
                                                                    <div class="ps-product__actions">
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist">
                                                                            <a href="#"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupCompare"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Quick view"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupQuickview"><i
                                                                                    class="fa fa-search"></i></a></div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps-product__badge">
                                                                    </div>
                                                                </div>
                                                                <div class="ps-product__content">
                                                                    <h5 class="ps-product__title"><a
                                                                            href="product1.html">Digital Thermometer
                                                                            X30-Pro</a></h5>
                                                                    <div class="ps-product__meta"><span
                                                                            class="ps-product__price sale">$60.39</span><span
                                                                            class="ps-product__del">$89.99</span>
                                                                    </div>
                                                                    <div class="ps-product__rating">
                                                                        <div
                                                                            class="br-wrapper br-theme-fontawesome-stars">
                                                                            <select class="ps-rating"
                                                                                data-read-only="true"
                                                                                style="display: none;">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4"
                                                                                    selected="selected">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                        <span class="ps-product__review">(
                                                                            Reviews)</span>
                                                                    </div>
                                                                    <div class="ps-product__desc">
                                                                        <ul class="ps-product__list">
                                                                            <li>Study history up to 30 days</li>
                                                                            <li>Up to 5 users simultaneously</li>
                                                                            <li>Has HEALTH certificate</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="ps-product__actions ps-product__group-mobile">
                                                                        <div class="ps-product__quantity">
                                                                            <div
                                                                                class="def-number-input number-input safari_only">
                                                                                <button class="minus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                        class="icon-minus"></i></button>
                                                                                <input class="quantity" min="0"
                                                                                    name="quantity" value="1"
                                                                                    type="number">
                                                                                <button class="plus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                        class="icon-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-product__cart"> <a
                                                                                class="ps-btn ps-btn--warning"
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="ps-product__item cart"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist">
                                                                            <a href="wishlist.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="compare.html"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                                            <div class="ps-product ps-product--standard">
                                                                <div class="ps-product__thumbnail"><a
                                                                        class="ps-product__image"
                                                                        href="product1.html">
                                                                        <figure><img  class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/016.jpg') }}"
                                                                                alt="alt"><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/021.jpg') }}"
                                                                                alt="alt">
                                                                        </figure>
                                                                    </a>
                                                                    <div class="ps-product__actions">
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist">
                                                                            <a href="#"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupCompare"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Quick view"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupQuickview"><i
                                                                                    class="fa fa-search"></i></a></div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps-product__badge">
                                                                    </div>
                                                                </div>
                                                                <div class="ps-product__content">
                                                                    <h5 class="ps-product__title"><a
                                                                            href="product1.html">Oxygen concentrator
                                                                            model
                                                                            KTS-5000</a></h5>
                                                                    <div class="ps-product__meta"><span
                                                                            class="ps-product__price">$53.99</span>
                                                                    </div>
                                                                    <div class="ps-product__rating">
                                                                        <div
                                                                            class="br-wrapper br-theme-fontawesome-stars">
                                                                            <select class="ps-rating"
                                                                                data-read-only="true"
                                                                                style="display: none;">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3"
                                                                                    selected="selected">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div><span class="ps-product__review">(
                                                                            Reviews)</span>
                                                                    </div>
                                                                    <div class="ps-product__desc">
                                                                        <ul class="ps-product__list">
                                                                            <li>Study history up to 30 days</li>
                                                                            <li>Up to 5 users simultaneously</li>
                                                                            <li>Has HEALTH certificate</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="ps-product__actions ps-product__group-mobile">
                                                                        <div class="ps-product__quantity">
                                                                            <div
                                                                                class="def-number-input number-input safari_only">
                                                                                <button class="minus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                        class="icon-minus"></i></button>
                                                                                <input class="quantity" min="0"
                                                                                    name="quantity" value="1"
                                                                                    type="number">
                                                                                <button class="plus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                        class="icon-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-product__cart"> <a
                                                                                class="ps-btn ps-btn--warning"
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart">Add to
                                                                                cart</a></div>
                                                                        <div class="ps-product__item cart"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist"><a
                                                                                href="wishlist.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="compare.html"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                                            <div class="ps-product ps-product--standard">
                                                                <div class="ps-product__thumbnail"><a
                                                                        class="ps-product__image"
                                                                        href="product1.html">
                                                                        <figure><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/002.jpg') }}"
                                                                                alt="alt"><img class="menu_productimg"
                                                                                src="{{ asset('frontend/img/products/017.jpg') }}"
                                                                                alt="alt">
                                                                        </figure>
                                                                    </a>
                                                                    <div class="ps-product__actions">
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist"><a
                                                                                href="#"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupCompare"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Quick view"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupQuickview"><i
                                                                                    class="fa fa-search"></i></a></div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps-product__badge">
                                                                    </div>
                                                                </div>
                                                                <div class="ps-product__content">
                                                                    <h5 class="ps-product__title"><a
                                                                            href="product1.html">Blue Hot Water Bottle,
                                                                            2
                                                                            Quart Capacity</a></h5>
                                                                    <div class="ps-product__meta"><span
                                                                            class="ps-product__price sale">$38.39</span><span
                                                                            class="ps-product__del">$14.52 -
                                                                            $15.52</span>
                                                                    </div>
                                                                    <div class="ps-product__rating">
                                                                        <div
                                                                            class="br-wrapper br-theme-fontawesome-stars">
                                                                            <select class="ps-rating"
                                                                                data-read-only="true"
                                                                                style="display: none;">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5"
                                                                                    selected="selected">5</option>
                                                                            </select>
                                                                        </div><span class="ps-product__review">(
                                                                            Reviews)</span>
                                                                    </div>
                                                                    <div class="ps-product__desc">
                                                                        <ul class="ps-product__list">
                                                                            <li>Study history up to 30 days</li>
                                                                            <li>Up to 5 users simultaneously</li>
                                                                            <li>Has HEALTH certificate</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="ps-product__actions ps-product__group-mobile">
                                                                        <div class="ps-product__quantity">
                                                                            <div
                                                                                class="def-number-input number-input safari_only">
                                                                                <button class="minus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                        class="icon-minus"></i></button>
                                                                                <input class="quantity" min="0"
                                                                                    name="quantity" value="1"
                                                                                    type="number">
                                                                                <button class="plus"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                        class="icon-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-product__cart"> <a
                                                                                class="ps-btn ps-btn--warning"
                                                                                href="#" data-toggle="modal"
                                                                                data-target="#popupAddcart">Add to
                                                                                cart</a></div>
                                                                        <div class="ps-product__item cart"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to cart"><a
                                                                                href="#"><i
                                                                                    class="fa fa-shopping-basket"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Wishlist"><a
                                                                                href="wishlist.html"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                        <div class="ps-product__item rotate"
                                                                            data-toggle="tooltip"
                                                                            data-placement="left" title=""
                                                                            data-original-title="Add to compare"><a
                                                                                href="compare.html"><i
                                                                                    class="fa fa-align-left"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mx-auto mt-5">
                                                            <a href="" class="ps-btn ps-btn--warning">View all</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            @if (!empty(optional($setting)->primary_phone))
                <div class="ps-navigation__right">Need help? <strong>{{ optional($setting)->primary_phone }}</strong>
                </div>
            @endif

        </div>
    </div>
</header>
<header class="ps-header ps-header--13 ps-header--mobile">
    @if (!empty(optional($setting)->website_name) || !empty(optional($setting)->site_motto))
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">Welcome to {{ optional($setting)->website_name }},
                    {{ optional($setting)->site_motto }}</p>
            </div>
            <a class="ps-noti__close"><i class="icon-cross"></i></a>
        </div>
    @endif
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-header__left">
                <ul class="ps-header__icons">
                    <li><a class="ps-header__item open-search" href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="ps-logo"><a href="index.html"> <img src="img/logo.png" alt></a></div>
            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li><a class="ps-header__item" href="#"><i class="icon-cart-empty"></i><span
                                class="badge">2</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<script>
    function handleLogout() {
        fetch('{{ route('logout') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    _method: 'POST'
                })
            })
            .then(response => {
                if (response.ok) {
                    window.location.href = '{{ url('/') }}'; // Redirect after logout
                } else {
                    console.error('Logout failed.');
                }
            })
            .catch(error => console.error('Logout error:', error));
    }
</script>
