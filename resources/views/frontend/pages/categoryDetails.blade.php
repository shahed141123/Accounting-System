<x-frontend-app-layout :title="'Category Details'">
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffffff;
            background-color: #17a2b8;
            border-color: 0px;
        }

        .ps-rating-stars {
            display: inline-block;
            font-size: 1.5em;
        }

        .ps-rating-stars .star {
            color: #d3d3d3;
            /* Gray color for empty stars */
            cursor: default;
            /* No need to change cursor */
        }

        .ps-rating-stars .star.filled {
            color: #ffd700;
            /* Gold color for filled stars */
        }
    </style>
    <div class="ps-categogy ps-categogy--dark">
        <div class="container">
            <!-- Breadcrumbs -->
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ url('/') }}">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">{{ $category->name }}</li>
            </ul>

            <!-- Category Title -->
            <h1 class="ps-categogy__name">{{ $category->name }}<sup>({{ $category->products()->count() }})</sup></h1>

            <!-- Main Content -->
            <div class="ps-categogy__content">
                <div class="row row-reverse">

                    <!-- Products Section -->
                    <div class="col-12 col-md-9">
                        <!-- Tabs -->
                        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($categories as $allcategory)
                                <li class="nav-item">
                                    <a class="nav-link {{ $allcategory->id == $category->id ? 'active' : '' }}"
                                        id="home-tab{{ $allcategory->id }}" data-toggle="tab"
                                        href="#home{{ $allcategory->id }}" role="tab"
                                        aria-controls="home{{ $allcategory->id }}"
                                        aria-selected="{{ $allcategory->id == $category->id ? 'true' : 'false' }}">
                                        {{ $allcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul> --}}

                        <div class="tab-content" id="myTabContent">
                            @foreach ($categories as $allcategory)
                                <div class="tab-pane fade {{ $allcategory->id == $category->id ? 'show active' : '' }}"
                                    id="home{{ $allcategory->id }}" role="tabpanel"
                                    aria-labelledby="home-tab{{ $allcategory->id }}">

                                    <!-- Products Grid -->
                                    <div class="ps-categogy--grid">
                                        <div class="row m-0">
                                            @php
                                                $catProducts = $allcategory->products()->paginate(12);
                                            @endphp
                                            @forelse ($catProducts as $category_product)
                                                <div class="col-6 col-lg-4 col-xl-3 p-0">
                                                    <div class="ps-product ps-product--standard">
                                                        <div class="ps-product__thumbnail">
                                                            <a class="ps-product__image"
                                                                href="{{ route('product.details', $category_product->slug) }}">
                                                                <figure>
                                                                    @foreach ($category_product->multiImages->slice(0, 2) as $image)
                                                                        <img src="{{ asset('storage/' . $image->photo) }}"
                                                                            alt="Product Image" />
                                                                    @endforeach
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
                                                                        data-target="#popupQuickview"><i
                                                                            class="fa fa-search"></i></a>
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
                                                                <a
                                                                    href="{{ route('product.details', $category_product->slug) }}">{{ $category_product->name }}</a>
                                                            </h5>
                                                            @auth
                                                                @if (!empty($category_product->box_discount_price))
                                                                    <div class="ps-product__meta">
                                                                        <span
                                                                            class="ps-product__price sale">£{{ $category_product->box_discount_price }}</span>
                                                                        <span
                                                                            class="ps-product__del">£{{ $category_product->box_price }}</span>
                                                                    </div>
                                                                @else
                                                                    <div class="ps-product__meta">
                                                                        <span
                                                                            class="ps-product__price sale">£{{ $category_product->box_price }}</span>
                                                                    </div>
                                                                @endif
                                                            @else
                                                                <div class="ps-product__meta">
                                                                    <a href="{{ route('login') }}"
                                                                        class="btn btn-info btn-block">Login to view
                                                                        price</a>
                                                                </div>
                                                            @endauth
                                                            <div class="ps-product__rating">
                                                                <div class="ps-rating-stars">
                                                                    <span class="star" data-value="1">&#9733;</span>
                                                                    <span class="star" data-value="2">&#9733;</span>
                                                                    <span class="star" data-value="3">&#9733;</span>
                                                                    <span class="star" data-value="4">&#9733;</span>
                                                                    <span class="star" data-value="5">&#9733;</span>
                                                                </div>
                                                                <select class="ps-rating" data-read-only="true"
                                                                    style="display:none;">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4" selected="selected">4
                                                                    </option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <span class="ps-product__review">(Reviews)</span>
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
                                                                    <div
                                                                        class="def-number-input number-input safari_only">
                                                                        <button class="minus"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                class="icon-minus"></i></button>
                                                                        <input class="quantity" min="0"
                                                                            name="quantity" value="1"
                                                                            type="number" />
                                                                        <button class="plus"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                class="icon-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-product__cart">
                                                                    <a class="ps-btn ps-btn--warning" href="#"
                                                                        data-toggle="modal"
                                                                        data-target="#popupAddcart">Add to cart</a>
                                                                </div>
                                                                <div class="ps-product__item cart"
                                                                    data-toggle="tooltip" data-placement="left"
                                                                    title="Add to cart">
                                                                    <a href="#"><i
                                                                            class="fa fa-shopping-basket"></i></a>
                                                                </div>
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Wishlist">
                                                                    <a href="wishlist.html"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                </div>
                                                                <div class="ps-product__item rotate"
                                                                    data-toggle="tooltip" data-placement="left"
                                                                    title="Add to compare">
                                                                    <a href="compare.html"><i
                                                                            class="fa fa-align-left"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 text-center">
                                                    <p>No products available in this category.</p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="ps-pagination">
                                        {{ $category_products->links() }}
                                    </div>

                                    <!-- Delivery Info -->
                                    <div class="ps-delivery ps-delivery--info"
                                        data-background="{{ asset('frontend/img/promotion/banner-delivery-3.jpg') }}">
                                        <div class="ps-delivery__content">
                                            <div class="ps-delivery__text">
                                                <i class="icon-shield-check"></i><span><strong>100% Secure
                                                        delivery</strong> without contacting the courier</span>
                                            </div>
                                            <a class="ps-delivery__more" href="#">More</a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar Widgets -->
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">
                            <div class="ps-widget__block pb-0">
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile nav nav-tabs" id="myTab" role="tablist">
                                        @foreach ($categories as $allcategory)
                                            <li class="nav-item col-12">
                                                <a class="nav-link {{ $allcategory->id == $category->id ? 'active' : '' }}"
                                                    id="home-tab{{ $allcategory->id }}" data-toggle="tab"
                                                    href="#home{{ $allcategory->id }}" role="tab"
                                                    aria-controls="home{{ $allcategory->id }}"
                                                    aria-selected="{{ $allcategory->id == $category->id ? 'true' : 'false' }}">
                                                    {{ $allcategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Rating Filter Widget -->
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Ratings</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="rating5">
                                            <label class="custom-control-label" for="rating5"></label>
                                            <div class="custom-label">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="rating4">
                                            <label class="custom-control-label" for="rating4"></label>
                                            <div class="custom-label">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(9)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Promo Banner -->
                            <div class="ps-widget__promo">
                                <img src="{{ asset('frontend/img/banner-sidebar1.jpg') }}" alt="Promo Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <section class="ps-section--newsletter ps-section--newsletter-inline">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <h3 class="ps-section__title">Join our newsletter and get £5 discount for your first order</h3>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="ps-section__content">
                            <form action="{{ route('subscription.add') }}" method="post">
                                @csrf
                                <div class="ps-form--subscribe">
                                    <div class="ps-form__control">
                                        <input class="form-control ps-input" type="email" name="email"
                                            placeholder="Enter your email address" required>
                                        <button class="ps-btn ps-btn--warning" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#myTab a:first').tab('show');
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectElement = document.querySelector('.ps-rating');
                const stars = document.querySelectorAll('.ps-rating-stars .star');

                function updateStars(rating) {
                    stars.forEach(star => {
                        if (parseInt(star.dataset.value) <= rating) {
                            star.classList.add('filled');
                        } else {
                            star.classList.remove('filled');
                        }
                    });
                }
                updateStars(parseInt(selectElement.value));
            });
        </script>
    @endpush
</x-frontend-app-layout>
