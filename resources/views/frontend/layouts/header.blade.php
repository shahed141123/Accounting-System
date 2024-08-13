<style>
    .dropdown-item {
        font-size: 16px !important;
    }
</style>
<header class="ps-header ps-header--2">
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
            <div class="ps-header__text"> {{ optional($setting)->site_motto }} </div>
            <div class="ps-top__right">

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
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('allBlog') }}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('privacyPolicy') }}">Policy</a></li>
                </ul>
                @if (!empty(optional($setting)->primary_phone))
                    <div class="ps-header__text">Need help? <strong>{{ optional($setting)->primary_phone }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt="">
                    <img class="sticky-logo"
                        src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                        alt="">
                </a>
            </div>
            <a class="ps-menu--sticky" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li>
                        <a class="ps-header__item" href="#" id="login-modal">
                            <i class="icon-user"></i>
                        </a>
                        @auth
                            <div class="ps-login--modal">
                                <!-- If the user is authenticated, show these options -->
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                                <!-- Hidden logout form -->
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else
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
                        @endauth
                    </li>
                    <li>
                        <a class="ps-header__item" href="{{ route('user.wishlist') }}">
                            <i class="fa fa-heart-o"></i>
                            <span class="badge wishlistCount">0</span>
                        </a>
                    </li>
                    <li>
                        <a class="ps-header__item" href="#" id="cart-mini">
                            <i class="icon-cart-empty"></i>
                            <span class="badge cartCount">{{ Cart::instance('cart')->count() }}</span></a>
                        <div class="ps-cart--mini miniCart">
                            @include('frontend.pages.cart.partials.minicart')
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
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image" href="#">
                                                <figure>
                                                    <img src="img/products/052.jpg" alt="alt">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">
                                                <a>3-layer <span class="hightlight">mask</span> with an elastic band (1
                                                    piece)
                                                </a>
                                            </h5>
                                            <p class="ps-product__desc">Study history up to 30 days Up to 5 users
                                                simultaneously Has HEALTH certificate</p>
                                            <div class="ps-product__meta"><span
                                                    class="ps-product__price">$38.24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-result__viewall"><a href="product-result.html">View all</a></div>
                        </div>
                    </div>
                </div>
                @if (!empty(optional($setting)->primary_phone))
                    <div class="ps-middle__text">Need help? <strong>{{ optional($setting)->primary_phone }}</strong>
                    </div>
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
                                                        @php
                                                            $catProducts = $category->products()->limit(8)->get();
                                                        @endphp
                                                        @foreach ($catProducts as $catProduct)
                                                            <div class="col-12 col-sm-6 col-lg-3">
                                                                <div class="ps-product ps-product--standard">
                                                                    <div class="ps-product__thumbnail">
                                                                        <a class="ps-product__image"
                                                                            href="{{ route('product.details', $catProduct->slug) }}">
                                                                            <figure>
                                                                                @if (count($catProduct->multiImages) > 0)
                                                                                    @foreach ($catProduct->multiImages->slice(0, 2) as $image)
                                                                                        @php
                                                                                            $imagePath =
                                                                                                'storage/' .
                                                                                                $image->photo;
                                                                                            $imageSrc = file_exists(
                                                                                                public_path($imagePath),
                                                                                            )
                                                                                                ? asset($imagePath)
                                                                                                : // : asset('frontend/img/no-product.png');
                                                                                                asset(
                                                                                                    'frontend/img/no-product.png',
                                                                                                );
                                                                                        @endphp
                                                                                        <img src="{{ $imageSrc }}"
                                                                                            alt="{{ $catProduct->meta_title }}"
                                                                                            width="210"
                                                                                            height="210"
                                                                                            style="object-fit: cover;" />
                                                                                    @endforeach
                                                                                @else
                                                                                    @php
                                                                                        $thumbnailPath =
                                                                                            'storage/' .
                                                                                            $catProduct->thumbnail;
                                                                                        $thumbnailSrc = file_exists(
                                                                                            public_path($thumbnailPath),
                                                                                        )
                                                                                            ? asset($thumbnailPath)
                                                                                            : asset(
                                                                                                'frontend/img/no-product.png',
                                                                                            );
                                                                                    @endphp
                                                                                    <img src="{{ $thumbnailSrc }}"
                                                                                        alt="{{ $catProduct->meta_title }}"
                                                                                        width="210" height="210"
                                                                                        style="object-fit: cover;" />
                                                                                @endif
                                                                            </figure>
                                                                        </a>
                                                                        <div class="ps-product__actions">
                                                                            <div class="ps-product__item"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left"
                                                                                title="Wishlist"><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </div>
                                                                            <div class="ps-product__item"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left"
                                                                                title="Quick view"><a href="#"
                                                                                    data-toggle="modal"
                                                                                    data-target="#popupQuickview{{ $catProduct->id }}"><i
                                                                                        class="fa fa-search"></i></a>
                                                                            </div>
                                                                            <div class="ps-product__item"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left"
                                                                                title="Add to cart"><a href="#"
                                                                                    data-toggle="modal"
                                                                                    data-target="#popupAddcart"><i
                                                                                        class="fa fa-shopping-basket"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-product__badge">
                                                                            <div class="ps-badge ps-badge--sale">Sale
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ps-product__content">
                                                                        <h5 class="ps-product__title">
                                                                            <a
                                                                                href="{{ route('product.details', $catProduct->slug) }}">
                                                                                {{ $catProduct->name }}
                                                                            </a>
                                                                        </h5>
                                                                        @auth
                                                                            @if (!empty($catProduct->box_discount_price))
                                                                                <div class="ps-product__meta">
                                                                                    <span
                                                                                        class="ps-product__price sale">£{{ $catProduct->box_discount_price }}</span>
                                                                                    <span
                                                                                        class="ps-product__del">£{{ $catProduct->box_price }}</span>
                                                                                </div>
                                                                            @else
                                                                                <div class="ps-product__meta"><span
                                                                                        class="ps-product__price sale">£{{ $catProduct->box_price }}</span>
                                                                                </div>
                                                                            @endif
                                                                            <a href="{{ route('cart.store', $catProduct->id) }}"
                                                                                class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                                                data-product_id="{{ $catProduct->id }}"
                                                                                data-product_qty="1">Add To Cart</a>
                                                                        @else
                                                                            <div class="ps-product__meta">
                                                                                <a href="{{ route('login') }}"
                                                                                    class="btn btn-info btn-block">Login
                                                                                    to view price</a>
                                                                            </div>
                                                                        @endauth
                                                                        <div
                                                                            class="ps-product__actions ps-product__group-mobile">
                                                                            <div class="ps-product__quantity">
                                                                                <div
                                                                                    class="def-number-input number-input safari_only">
                                                                                    <button class="minus"
                                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                            class="icon-minus"></i></button>
                                                                                    <input class="quantity"
                                                                                        min="0" name="quantity"
                                                                                        value="1"
                                                                                        type="number" />
                                                                                    <button class="plus"
                                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                            class="icon-plus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ps-product__item"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left"
                                                                                title="Wishlist">
                                                                                <a href="">
                                                                                    <i class="fa fa-heart-o"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="ps-product__item rotate"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left"
                                                                                title="Add to compare"><a
                                                                                    href="compare.html"><i
                                                                                        class="fa fa-align-left"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mx-auto mt-5">
                                                            <a href="{{ route('category.products',$category->slug) }}" class="ps-btn ps-btn--warning">View
                                                                all</a>
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
