<x-frontend-app-layout :title="'Home'">
    <div class="ps-home ps-home--14">
        <div class="ps-home__content">
            <div class="container">
                <section class="ps-section--banner">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="ps-banner"><img class="ps-banner__imagebg"
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner18.jpg" alt>
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title text-white">Convenient<br>Solutions Await!</h2>
                                        <div class="ps-banner__desc text-white">Only in this week. Don’t misss!</div>
                                        <div class="ps-banner__price"> <span class="text-warning">$15.99</span>
                                            <del>$29.99</del>
                                        </div><a class="ps-banner__shop bg-warning" href="#">Add to cart</a>
                                    </div>
                                    <div class="ps-banner__thumnail"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo">
                                <div class="ps-promo__item"><img class="ps-promo__banner"
                                        src="{{ asset('frontend') }}/img/promotion/bg-banner19.png" alt>
                                    <div class="ps-promo__content"><span class="ps-promo__badge bg-white">New</span>
                                        <h4 class="ps-promo__name text-white">Eco-Friendly <br>Packaging</h4>
                                        <div class="ps-promo__sale">-30%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="ps-promo ps-promo--home">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend') }}/img/promotion/bg-promo1.jpg" alt="alt" />
                                <div class="ps-promo__content"><span class="ps-promo__badge">New</span>
                                    <h4 class="text-dark ps-promo__name">Power Effect <br />Pro Series</h4>
                                    <div class="ps-promo__image"><img src="{{ asset('frontend') }}/img/icon/icon10.png"
                                            alt="" /></div>
                                    <a class="btn-green ps-promo__btn" href="category-grid.html">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend') }}/img/promotion/bg-promo2.jpg" alt="alt" />
                                <div class="ps-promo__content">
                                    <h4 class="text-white ps-promo__name">Eczema <br />Treatment CBD <br />Ointement
                                    </h4>
                                    <div class="ps-promo__sale text-white">-30%</div><a class="btn-green ps-promo__btn"
                                        href="category-grid.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend') }}/img/promotion/bg-promo3.jpg" alt="alt" />
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
            <section class="ps-product--type">
                <div class="container">
                    <h3 class="ps-section__title">Popular categories</h3>
                    <div class="ps-category__content">
                        @foreach ($categorys as $category)
                            <a class="ps-category__item" href="{{ route('category.products', $category->slug) }}">
                                <img class="ps-category__icon" src="{{ asset('storage/'.$category->logo) }}" alt>
                                <h6 class="ps-category__name">{{ $category->name }}</h6>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="ps-section--latest-horizontal">
                <div class="container">
                    <h3 class="ps-section__title">Latest products</h3>
                    <div class="ps-section__content">
                        <div class="row m-0">
                            @foreach ($latest_products as $latest_product)
                                <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image" href="{{ route('product.details',$latest_product->slug) }}">
                                                    <figure>
                                                        @foreach ($latest_product->multiImages->slice(0, 2) as $image)
                                                            <img src="{{ asset('storage/'.$image->photo) }}"
                                                                alt="{{ $latest_product->meta_title }}"/>
                                                        @endforeach
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist"><a href="#"><i
                                                                class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Quick view"><a href="#"
                                                            data-toggle="modal" data-target="#popupQuickview"><i
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
                                                    <a href="{{ route('product.details',$latest_product->slug) }}">
                                                        {{ $latest_product->name }}
                                                    </a>
                                                </h5>
                                                <div class="ps-product__meta">
                                                    <button class="btn btn-info btn-block">Login to view price</button>
                                                    <!-- <span class="ps-product__price sale">£9.99</span>
                                                    <span class="ps-product__del">$38.24</span> -->
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
                                                            <input class="quantity" min="0" name="quantity"
                                                                value="1" type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                            href="#" data-toggle="modal"
                                                            data-target="#popupAddcart">Add to cart</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        data-placement="left" title="Add to cart"><a
                                                            href="#"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist"><a
                                                            href="wishlist.html"><i class="fa fa-heart-o"></i></a>
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner20.jpg" alt="alt" />
                                <div class="ps-promo__content"><span class="ps-promo__badge">New</span>
                                    <h4 class="text-white ps-promo__name">FaceWash <br />up to -20%</h4>
                                    <div class="ps-promo__image"><img
                                            src="{{ asset('frontend') }}/img/icon/icon19.png" alt="" />
                                    </div><a class="btn-green ps-promo__btn" href="category-grid.html">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-promo__item"><img class="ps-promo__banner"
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner21.jpg" alt="alt" />
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner22.jpg" alt="alt" />
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner23.jpg" alt="alt" />
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner24.jpg" alt="alt" />
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner25.jpg" alt="alt" />
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
                                    src="{{ asset('frontend') }}/img/promotion/bg-banner26.jpg" alt="alt" />
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
                                    <div class="ps-countdown__ref">Secs </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__carousel">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                            data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5"
                            data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="product-details.html">
                                            <figure><img src="{{ asset('frontend') }}/img/products/medicine1.jpg"
                                                    alt="alt" /><img
                                                    src="{{ asset('frontend') }}/img/products/medicine3.jpg"
                                                    alt="alt" />
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"><a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Add to cart"><a href="#" data-toggle="modal"
                                                    data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product-details.html">3-layer mask
                                                with an elastic band (1 piece)</a></h5>
                                        <button class="btn btn btn-info btn-block">Login To check the price</button>
                                        <!-- <div class="ps-product__meta"><span class="ps-product__price sale">£9.99</span><span class="ps-product__del">$38.24</span>
                                        </div> -->

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
                                                    <input class="quantity" min="0" name="quantity"
                                                        value="1" type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                    href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Add to cart</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                data-placement="left" title="Add to compare"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="product-details.html">
                                            <figure><img src="{{ asset('frontend') }}/img/products/medicine1.jpg"
                                                    alt="alt" /><img
                                                    src="{{ asset('frontend') }}/img/products/medicine3.jpg"
                                                    alt="alt" />
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"><a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Add to cart"><a href="#" data-toggle="modal"
                                                    data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product-details.html">3-layer mask
                                                with an elastic band (1 piece)</a></h5>
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£9.99</span><span
                                                class="ps-product__del">$38.24</span>
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
                                                    <input class="quantity" min="0" name="quantity"
                                                        value="1" type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                    href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Add to cart</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                data-placement="left" title="Add to compare"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="product-details.html">
                                            <figure><img src="{{ asset('frontend') }}/img/products/medicine1.jpg"
                                                    alt="alt" /><img
                                                    src="{{ asset('frontend') }}/img/products/medicine3.jpg"
                                                    alt="alt" />
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"><a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Add to cart"><a href="#" data-toggle="modal"
                                                    data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product-details.html">3-layer mask
                                                with an elastic band (1 piece)</a></h5>
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£9.99</span><span
                                                class="ps-product__del">$38.24</span>
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
                                                    <input class="quantity" min="0" name="quantity"
                                                        value="1" type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                    href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Add to cart</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                data-placement="left" title="Add to compare"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="product-details.html">
                                            <figure><img src="{{ asset('frontend') }}/img/products/medicine1.jpg"
                                                    alt="alt" /><img
                                                    src="{{ asset('frontend') }}/img/products/medicine3.jpg"
                                                    alt="alt" />
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"><a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Add to cart"><a href="#" data-toggle="modal"
                                                    data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product-details.html">3-layer mask
                                                with an elastic band (1 piece)</a></h5>
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£9.99</span><span
                                                class="ps-product__del">$38.24</span>
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
                                                    <input class="quantity" min="0" name="quantity"
                                                        value="1" type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                    href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Add to cart</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                data-placement="left" title="Add to compare"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image"
                                            href="product-details.html">
                                            <figure><img src="{{ asset('frontend') }}/img/products/medicine1.jpg"
                                                    alt="alt" /><img
                                                    src="{{ asset('frontend') }}/img/products/medicine3.jpg"
                                                    alt="alt" />
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"><a href="#" data-toggle="modal"
                                                    data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Add to cart"><a href="#" data-toggle="modal"
                                                    data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sale">Sale</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product-details.html">3-layer mask
                                                with an elastic band (1 piece)</a></h5>
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£9.99</span><span
                                                class="ps-product__del">$38.24</span>
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
                                                    <input class="quantity" min="0" name="quantity"
                                                        value="1" type="number" />
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning"
                                                    href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Add to cart</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                data-placement="left" title="Add to cart"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                data-placement="left" title="Add to compare"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="ps-home__block">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="blog-details.html"><img
                                            src="{{ asset('frontend') }}/img/blog/blog13-496x262.jpg"
                                            alt="alt" /></a>
                                    <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span
                                            class="ps-badge__item">PHARMACY</span><span
                                            class="ps-badge__item">SALE</span>
                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">May 18, 2023</span><a
                                            class="ps-blog__author" href="#">Alfredo Austin</a></div><a
                                        class="ps-blog__title" href="blog-details.html">The latest tests of popular
                                        masks in accordance with CV2s standards</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <section class="ps-section--newsletter">
                                <h3 class="ps-section__title">Join our newsletter and get <br>£20 discount for your
                                    first order</h3>
                                <p class="ps-section__text">Only for the first order.</p>
                                <div class="ps-section__content">
                                    <form action="{{ route('subscription.add') }}" method="post">
                                        @csrf
                                        <div class="ps-form--subscribe">
                                            <div class="ps-form__control">
                                                <input class="form-control ps-input" type="email" name="email"
                                                    placeholder="Enter your email address">
                                                <button type="submit"
                                                    class="ps-btn ps-btn--warning">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
