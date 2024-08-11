<style>
    .dropdown-item {
        font-size: 16px !important;
    }
</style>
<header class="ps-header ps-header--13">
    @if (!empty($site->website_name) || !empty($site->site_motto))
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">Welcome to {{ $site->website_name }}, {{ $site->site_motto }}</p>
            </div>
            <a class="ps-noti__close">
                <i class="icon-cross"></i>
            </a>
        </div>
    @endif
    @if (!empty($site->primary_phone))
        <div class="ps-header__top">
            <div class="container">
                <div class="ps-header__text">Need help? <strong>{{ $site->primary_phone }}</strong></div>
            </div>
        </div>
    @endif
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ !empty($site->site_logo_black) && file_exists(public_path('storage/' . $site->site_logo_black)) ? asset('storage/' . $site->site_logo_black) : 'https://i.ibb.co/0cJBJJ8/logo-white.png' }}"
                        alt>
                    <img class="sticky-logo"
                        src="{{ !empty($site->site_logo_black) && file_exists(public_path('storage/' . $site->site_logo_black)) ? asset('storage/' . $site->site_logo_black) : 'https://i.ibb.co/0cJBJJ8/logo-white.png' }}"
                        alt>
                </a>
            </div>
            <a class="ps-menu--sticky" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li><a class="ps-header__item open-search" href="#"><i class="icon-magnifier"></i></a></li>
                    <li>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-user"></i>
                            </a>
                            <div class="dropdown-menu" style="font-size: 16px;" aria-labelledby="dropdownMenuButton">
                                @auth
                                    <!-- If the user is authenticated, show these options -->
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>

                                    <!-- Logout button inside form -->
                                    <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                                        @csrf
                                        <a type="submit" href="javascript:void(0)" class="dropdown-item">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                @else
                                    <!-- If the user is not authenticated, show these options -->
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>

                        </div>
                    </li>


                    <li>
                        <a class="ps-header__item" href="#" id="cart-mini"><i class="icon-cart-empty"></i><span
                                class="badge">2</span></a>
                        <div class="ps-cart--mini">
                            <ul class="ps-cart__items">
                                <li class="ps-cart__item">
                                    <div class="ps-product--mini-cart"><a class="ps-product__thumbnail"
                                            href="product-details.html"><img src="img/products/055.jpg"
                                                alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name"
                                                href="product-details.html">Somersung Sonic X2500 Pro White</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$399.99</span>
                                            </p>
                                        </div><a class="ps-product__remove" href="javascript: void(0)"><i
                                                class="icon-cross"></i></a>
                                    </div>
                                </li>
                                <li class="ps-cart__item">
                                    <div class="ps-product--mini-cart"><a class="ps-product__thumbnail"
                                            href="product-details.html"><img src="img/products/001.jpg"
                                                alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name"
                                                href="product-details.html">Digital Thermometer X30-Pro</a>
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
                    <form action="#" method="post">
                        <div class="ps-search-table">
                            <div class="input-group">
                                <input class="form-control ps-input" type="text" placeholder="Search for products">
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
                                                <figure><img src="img/products/052.jpg" alt="alt" /></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3-layer <span
                                                        class='hightlight'>mask</span> with an elastic band (1
                                                    piece)</a></h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span
                                                    class="ps-product__price">$38.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product ps-product--horizontal">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="#">
                                                <figure><img src="img/products/033.jpg" alt="alt" /></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3 Layer Disposable Protective Face <span
                                                        class='hightlight'>mask</span>s</a></h5>
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
                                                <figure><img src="img/products/051.jpg" alt="alt" /></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>3-Ply Ear-Loop Disposable Blue Face <span
                                                        class='hightlight'>mask</span></a></h5>
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
                                                <figure><img src="img/products/050.jpg" alt="alt" /></figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a>Disposable Face <span
                                                        class='hightlight'>mask</span> for Unisex</a></h5>
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
                            <div class="ps-result__viewall"><a href="product-result.html">View all 5 results</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-navigation">
        <div class="container">
            <div class="ps-navigation__left">
                <nav class="ps-main-menu">
                    <ul class="menu">
                        @foreach ($categories->slice(0, 4) as $category)
                            <li class="has-mega-menu">
                                <a href="{{ route('category.products', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                        <li class="has-mega-menu"><a href="{{ route('allBlog') }}">Blog</a></li>
                        <li class="has-mega-menu"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            @if (!empty($site->primary_phone))
                <div class="ps-navigation__right">Need help? <strong>{{ $site->primary_phone }}</strong></div>
            @endif

        </div>
    </div>
</header>
<header class="ps-header ps-header--13 ps-header--mobile">
    @if (!empty($site->website_name) || !empty($site->site_motto))
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">Welcome to {{ $site->website_name }}, {{ $site->site_motto }}</p>
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
