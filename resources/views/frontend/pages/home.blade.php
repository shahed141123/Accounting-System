<x-frontend-app-layout :title="'Home'">
    <style>
        .dealCarousel-prev,
        .dealCarousel-next {
            background: #fff;
            /* Background color */
            color: #000;
            /* Text color */
            border: 1px solid #ddd;
            /* Border styling */
            padding: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        .dealCarousel-prev {
            position: absolute;
            left: 10px;
            /* Positioning */
            top: 50%;
            transform: translateY(-50%);
        }

        .dealCarousel-next {
            position: absolute;
            right: 10px;
            /* Positioning */
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
    <section class="ps-section--banner">
        <div class="ps-section__overlay">
            <div class="ps-section__loading"></div>
        </div>
        <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="false" data-owl-loop="true" data-owl-speed="15000"
            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1"
            data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000"
            data-owl-mousedrag="on">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-5709px, 0px, 0px); transition: 1s; width: 13321px;">
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#F0F2F5;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Antibacterial<br> Medical Mask</h2>
                                        <div class="ps-banner__desc">Just a few seconds to measure your body
                                            temperature.</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/bacterial.svg') }}"
                                                    alt="alt">Anti-Bacterial</div>
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/virus.svg') }}"
                                                    alt="alt">Anti-Virus</div>
                                        </div><a class="bg-warning ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-yellow ps-top"><small>only</small>$25</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round5.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide3.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#FFCC00;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Get rid of bacteria <br>in your home</h2>
                                        <div class="ps-banner__desc">Get rid of all bacteria!</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/bacterial.svg') }}"
                                                    alt="alt">Anti-Bacterial</div>
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/virus.svg') }}"
                                                    alt="alt">Anti-Virus</div>
                                        </div><a class="bg-white ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-primary">-25%</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round2.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide4.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#DAECFA;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Candid <br> Whitening Kit</h2>
                                        <div class="ps-banner__desc">Only in this week. Don’t misss!</div>
                                        <div class="ps-banner__price"> <span>$15.99</span>
                                            <del>$29.99</del>
                                        </div><a class="bg-warning ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-warning ps-center">-30%</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round2.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide1.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#F0F2F5;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Antibacterial<br> Medical Mask</h2>
                                        <div class="ps-banner__desc">Just a few seconds to measure your body
                                            temperature.</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/bacterial.svg') }}"
                                                    alt="alt">Anti-Bacterial</div>
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/virus.svg') }}"
                                                    alt="alt">Anti-Virus</div>
                                        </div><a class="bg-warning ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-yellow ps-top"><small>only</small>$25</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round5.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide3.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#FFCC00;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Get rid of bacteria <br>in your home</h2>
                                        <div class="ps-banner__desc">Get rid of all bacteria!</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/bacterial.svg') }}"
                                                    alt="alt">Anti-Bacterial</div>
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/virus.svg') }}"
                                                    alt="alt">Anti-Virus</div>
                                        </div><a class="bg-white ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-primary">-25%</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round2.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide4.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="ps-banner" style="background:#DAECFA;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Candid <br> Whitening Kit</h2>
                                        <div class="ps-banner__desc">Only in this week. Don’t misss!</div>
                                        <div class="ps-banner__price"> <span>$15.99</span>
                                            <del>$29.99</del>
                                        </div><a class="bg-warning ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-warning ps-center">-30%</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round2.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide1.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item ">
                        <div class="ps-banner" style="background:#F0F2F5;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Antibacterial<br> Medical Mask</h2>
                                        <div class="ps-banner__desc">Just a few seconds to measure your body
                                            temperature.</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/bacterial.svg') }}"
                                                    alt="alt">Anti-Bacterial</div>
                                            <div class="ps-banner__btn"><img
                                                    src="{{ asset('frontend/img/icon/virus.svg') }}"
                                                    alt="alt">Anti-Virus</div>
                                        </div><a class="bg-warning ps-banner__shop" href="#">Shop now</a>
                                        <div class="ps-banner__persen bg-yellow ps-top"><small>only</small>$25</div>
                                    </div>
                                    <div class="ps-banner__thumnail"><img class="ps-banner__round"
                                            src="{{ asset('frontend/img/round5.png') }}" alt="alt"><img
                                            class="ps-banner__image"
                                            src="{{ asset('frontend/img/promotion/slide3.png') }}" alt="alt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                        class="fa fa-chevron-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="fa fa-chevron-right"></i></button></div>
            <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                    role="button" class="owl-dot active"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button></div>
        </div>
    </section>
    <div class="ps-home ps-home--14">
        <div class="ps-home__content">
            <div class="container">
                <div class="ps-promo ps-promo--home pt-5 mt-5">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-promo1.jpg') }}" alt="alt" />
                                <div class="ps-promo__content"><span class="ps-promo__badge">New</span>
                                    <h4 class="text-dark ps-promo__name">Power Effect <br />Pro Series</h4>
                                    <div class="ps-promo__image"><img
                                            src="{{ asset('frontend/img/icon/icon10.png') }}" alt="" /></div>
                                    <a class="btn-green ps-promo__btn" href="category-grid.html">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-promo2.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-white ps-promo__name">Eczema <br />Treatment CBD <br />Ointement
                                    </h4>
                                    <div class="ps-promo__sale text-white">-30%</div><a
                                        class="btn-green ps-promo__btn" href="category-grid.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-promo3.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-white ps-promo__name">SFP 50+ <br />Suncream</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$6.99</p>
                                        <p class="ps-promo__del text-white">$19.99</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <section class="ps-product--type">
                <div class="container">
                    <h3 class="ps-section__title">Popular categories</h3>
                    <div class="ps-category__content">

                            <a class="ps-category__item" href="{{ route('category.products', $category->slug) }}">


                                <h6 class="ps-category__name"></h6>
                            </a>

                    </div>
                </div>
            </section> --}}
            <section class="ps-section--categories my-5">
                <h3 class="ps-section__title">Popular categories</h3>
                <div class="container pt-5">
                    <div class="ps-section__content">
                        <div class="ps-categories__list">
                            @foreach ($categorys as $category)
                                <div class="ps-categories__item">
                                    <a class="ps-categories__link" href="category-grid.html">
                                        @php
                                            $logoPath = 'storage/' . $category->logo;
                                            $logoSrc = file_exists(public_path($logoPath))
                                                ? asset($logoPath)
                                                : asset('frontend/img/no-category.png');
                                        @endphp
                                        <img class="ps-category__icon" src="{{ $logoSrc }}"
                                            alt="{{ $category->name }}">
                                    </a>
                                    <a class="ps-categories__name"
                                        href="">{{ $category->name }}</a>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="text-center"> <a class="ps-categories__show" href="category-grid.html">Show
                                all</a>
                        </div> --}}
                    </div>
                </div>
            </section>
            <section class="ps-section--latest-horizontal mt-5">
                <div class="container">
                    <h3 class="ps-section__title">Latest products</h3>
                    <div class="ps-section__content">
                        <div class="row m-0">
                            @foreach ($latest_products as $latest_product)
                                <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.details', $latest_product->slug) }}">
                                                    <figure>
                                                        @if (count($latest_product->multiImages) > 0)
                                                            @foreach ($latest_product->multiImages->slice(0, 2) as $image)
                                                                @php
                                                                    $imagePath = 'storage/' . $image->photo;
                                                                    $imageSrc = file_exists(public_path($imagePath))
                                                                        ? asset($imagePath)
                                                                        : // : asset('frontend/img/no-product.jpg');
                                                                        asset('frontend/img/no-product.jpg');
                                                                @endphp
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $latest_product->meta_title }}"
                                                                    width="210" height="210"
                                                                    style="object-fit: cover;" />
                                                            @endforeach
                                                        @else
                                                            @php
                                                                $thumbnailPath =
                                                                    'storage/' . $latest_product->thumbnail;
                                                                $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                    ? asset($thumbnailPath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $latest_product->meta_title }}"
                                                                width="210" height="210"
                                                                style="object-fit: cover;" />
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $latest_product->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Quick view"><a href="#"
                                                            data-toggle="modal"
                                                            data-target="#popupQuickview{{ $latest_product->id }}"><i
                                                                class="fa fa-search"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Add to cart"><a href="#"
                                                            data-toggle="modal" data-target="#popupAddcart"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <div class="ps-product__badge">
                                                    <div class="ps-badge ps-badge--sale">Sale</div>
                                                </div>
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.details', $latest_product->slug) }}">
                                                        {{ $latest_product->name }}
                                                    </a>
                                                </h5>
                                                @auth
                                                    @if (!empty($latest_product->box_discount_price))
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $latest_product->box_discount_price }}</span>
                                                            <span
                                                                class="ps-product__del">£{{ $latest_product->box_price }}</span>
                                                        </div>
                                                    @else
                                                        <div class="ps-product__meta"><span
                                                                class="ps-product__price sale">£{{ $latest_product->box_price }}</span>
                                                        </div>
                                                    @endif
                                                    <a href="{{ route('cart.store', $latest_product->id) }}"
                                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                        data-product_id="{{ $latest_product->id }}"
                                                        data-product_qty="1">Add To Cart</a>
                                                @else
                                                    <div class="ps-product__meta">
                                                        <a href="{{ route('login') }}"
                                                            class="btn btn-info btn-block">Login
                                                            to view price</a>
                                                    </div>
                                                @endauth
                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                    class="icon-minus"></i></button>
                                                            <input class="quantity" min="0" name="quantity"
                                                                value="1" type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                            href="#" data-toggle="modal"
                                                            data-target="#popupAddcart">Add to cart</a></div> --}}
                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        data-placement="left" title="Add to cart"><a
                                                            href="#"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist"><a
                                                            class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $latest_product->id) }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip"
                                                        data-placement="left" title="Add to compare"><a
                                                            href="compare.html"><i class="fa fa-align-left"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="ps-promo ps-promo--home">
                    <h3 class="ps-promo__title">This week deals</h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner20.jpg') }}" alt="alt" />
                                <div class="ps-promo__content"><span class="ps-promo__badge">New</span>
                                    <h4 class="text-white ps-promo__name">FaceWash <br />up to -20%</h4>
                                    <div class="ps-promo__image"><img
                                            src="{{ asset('frontend/img/icon/icon19.png') }}" alt="" />
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner21.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-white ps-promo__name">PREHCU <br />Workout</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$6.99</p>
                                        <p class="ps-promo__del text-white">$19.99</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner22.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-dark ps-promo__name">Neauthy <br />creams</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$12.99</p>
                                        <p class="ps-promo__del text-dark">$19.99</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ps-promo--horizontal">
                        <div class="col-12 col-md-3">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner23.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-dark ps-promo__name">PowerUp <br />Lemon</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$38.24</p>
                                        <p class="ps-promo__del text-dark">$48.24</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner24.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-dark ps-promo__name">TwoEXP+ <br />Areozol</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$8.24</p>
                                        <p class="ps-promo__del text-dark">$12.24</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner25.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-dark ps-promo__name">Cranberry <br />Brand</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$13.24</p>
                                        <p class="ps-promo__del text-dark">$18.24</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend/img/promotion/bg-banner26.jpg') }}" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-dark ps-promo__name">Recoup <br />Recovery</h4>
                                    <div class="ps-promo__meta">
                                        <p class="ps-promo__price text-warning">$8.24</p>
                                        <p class="ps-promo__del text-dark">$12.24</p>
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-section--deals">
                    <div class="ps-section__header">
                        <h3 class="ps-section__title">Best Deals of the week!</h3>
                        <div class="ps-countdown">
                            <div class="ps-countdown__content">
                                <div class="ps-countdown__block ps-countdown__days">
                                    <div class="ps-countdown__number"><span class="first-1st">0</span><span
                                            class="first">0</span><span class="last">0</span></div>
                                    <div class="ps-countdown__ref">Days</div>
                                </div>
                                <div class="ps-countdown__block ps-countdown__hours">
                                    <div class="ps-countdown__number"><span class="first">0</span><span
                                            class="last">0</span></div>
                                    <div class="ps-countdown__ref">Hours</div>
                                </div>
                                <div class="ps-countdown__block ps-countdown__minutes">
                                    <div class="ps-countdown__number"><span class="first">0</span><span
                                            class="last">0</span></div>
                                    <div class="ps-countdown__ref">Mins</div>
                                </div>
                                <div class="ps-countdown__block ps-countdown__seconds">
                                    <div class="ps-countdown__number"><span class="first">0</span><span
                                            class="last">0</span></div>
                                    <div class="ps-countdown__ref">Secs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__carousel">
                        <div class="dealCarousel owl-carousel">
                            @foreach ($deal_products as $deal_product)
                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image"
                                                href="{{ route('product.details', $deal_product->slug) }}">
                                                <figure>
                                                    @if (count($deal_product->multiImages) > 0)
                                                        @foreach ($deal_product->multiImages->slice(0, 2) as $image)
                                                            @php
                                                                $imagePath = 'storage/' . $image->photo;
                                                                $imageSrc = file_exists(public_path($imagePath))
                                                                    ? asset($imagePath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $imageSrc }}"
                                                                alt="{{ $deal_product->meta_title }}" width="210"
                                                                height="210" style="object-fit: cover;" />
                                                        @endforeach
                                                    @else
                                                        @php
                                                            $thumbnailPath = 'storage/' . $deal_product->thumbnail;
                                                            $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                ? asset($thumbnailPath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <img src="{{ $thumbnailSrc }}"
                                                            alt="{{ $deal_product->meta_title }}" width="210"
                                                            height="210" style="object-fit: cover;" />
                                                    @endif
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a class="add_to_wishlist"
                                                        href="{{ route('wishlist.store', $deal_product->id) }}">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Quick view"><a href="#"
                                                        data-toggle="modal"
                                                        data-target="#popupQuickview{{ $deal_product->id }}"><i
                                                            class="fa fa-search"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart"><a href="#"
                                                        data-toggle="modal" data-target="#popupAddcart"><i
                                                            class="fa fa-shopping-basket"></i></a></div>
                                            </div>
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--sale">Sale</div>
                                            </div>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">
                                                <a href="{{ route('product.details', $deal_product->slug) }}">
                                                    {{ $deal_product->name }}
                                                </a>
                                            </h5>
                                            @auth
                                                @if (!empty($deal_product->box_discount_price))
                                                    <div class="ps-product__meta">
                                                        <span
                                                            class="ps-product__price sale">£{{ $deal_product->box_discount_price }}</span>
                                                        <span
                                                            class="ps-product__del">£{{ $deal_product->box_price }}</span>
                                                    </div>
                                                @else
                                                    <div class="ps-product__meta">
                                                        <span
                                                            class="ps-product__price sale">£{{ $deal_product->box_price }}</span>
                                                    </div>
                                                @endif
                                                <a href="{{ route('cart.store', $deal_product->id) }}"
                                                    class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                    data-product_id="{{ $deal_product->id }}" data-product_qty="1">Add To
                                                    Cart</a>
                                            @else
                                                <div class="ps-product__meta">
                                                    <a href="{{ route('login') }}" class="btn btn-info btn-block">Login
                                                        to view price</a>
                                                </div>
                                            @endauth
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__quantity">
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity"
                                                            value="1" type="number" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                class="icon-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart"><a href="#"><i
                                                            class="fa fa-shopping-basket"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist"><a href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></div>
                                                <div class="ps-product__item rotate" data-toggle="tooltip"
                                                    data-placement="left" title="Add to compare"><a
                                                        href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

            </div>
            <section class="ps-section--blog container mb-5">
                <h3 class="ps-section__title">From the blog</h3>
                <div class="ps-section__carousel">
                    <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="false" data-owl-loop="true"
                        data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                        data-owl-item="5" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2"
                        data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">

                        @foreach ($blog_posts as $blog_post)
                            <div class="ps-section__item">
                                <div class="ps-blog--latset">
                                    <div class="ps-blog__thumbnail">
                                        <a href="{{ route('blog.details', $blog_post->slug) }}">
                                            <img src="{{ $blog_post->image ? asset('storage/' . $blog_post->image) : asset('frontend/img/no-blogs.jpg') }}"
                                                alt="Blog Post Image"
                                                onerror="this.onerror=null; this.src='{{ asset('frontend/img/no-blogs.jpg') }}';">
                                        </a>
                                        @if ($blog_post->badge)
                                            <div class="ps-blog__badge">
                                                <span class="ps-badge__item">{{ $blog_post->badge }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ps-blog__content">
                                        <div class="ps-blog__meta">
                                            <span
                                                class="ps-blog__date">{{ $blog_post->created_at->format('M d Y') }}</span>
                                            <a class="ps-blog__author" href="#">{{ $blog_post->author }}</a>
                                        </div>
                                        <a class="ps-blog__title" style="font-size: 18px;"
                                            href="{{ route('blog.details', $blog_post->slug) }}">{{ $blog_post->title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"><i
                                class="fa fa-chevron-left"></i></button>
                        <button type="button" role="presentation" class="owl-next"><i
                                class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot"><span></span></button>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('frontend.layouts.HomeQuickViewModal')
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.dealCarousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    navText: [
                        '<div class="dealCarousel-prev">←</div>',
                        '<div class="dealCarousel-next">→</div>'
                    ],
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 5,
                    loop: true,
                    nav: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
