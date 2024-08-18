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

        .ps-header.ps-header--sticky {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: top 0.3s;
            background-color: #fff;
            /* Ensure a background color if needed */
        }
    </style>

    <div class="ps-categogy ps-categogy--dark">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <!-- Breadcrumbs -->
                    <ul class="ps-breadcrumb">
                        <li class="ps-breadcrumb__item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="ps-breadcrumb__item active" aria-current="page">{{ $category->name }}</li>
                    </ul>
                    <!-- Category Title -->
                    <h1 class="ps-categogy__name text-info" style="font-size: 25px">
                        {{ $category->name }}<sup>({{ $category->products()->count() }})</sup>
                    </h1>
                </div>
                <div class="col-lg-9">
                    <div>
                        {{-- <img class="img-fluid" style="object-fit: cover;height: 125px;width: 100%;"
                            src="{{ asset('storage/' . $category->banner_image) }}" alt=""> --}}
                        <img class="img-fluid ps-categogy__banner" style="object-fit: cover;height: 200px;width: 100%;"
                            src="{{ asset('storage/' . $category->banner_image) }}" alt="">
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="ps-categogy__content pt-2">
                <div class="row row-reverse">
                    <!-- Products Section -->
                    <div class="col-12 col-md-9">
                        <div class="tab-content" id="myTabContent">
                            @foreach ($categories as $allcategory)
                                @php
                                    $catProducts = $allcategory->products()->paginate(12);
                                @endphp
                                <div class="tab-pane fade {{ $allcategory->id == $category->id ? 'show active' : '' }}"
                                    id="home{{ $allcategory->id }}" role="tabpanel"
                                    aria-labelledby="home-tab{{ $allcategory->id }}"
                                    data-category-id="{{ $allcategory->id }}"
                                    data-category-name="{{ $allcategory->name }}"
                                    data-product-count="{{ $allcategory->products()->count() }}"
                                    data-banner-image="{{ asset('storage/' . $allcategory->banner_image) }}">

                                    <!-- Products Grid -->
                                    <div class="ps-categogy--grid">
                                        <div class="row m-0">

                                            @forelse ($catProducts as $category_product)
                                                <div class="col-6 col-lg-4 col-xl-3 p-0">
                                                    <div class="ps-product ps-product--standard">
                                                        <div class="ps-product__thumbnail">
                                                            <a class="ps-product__image"
                                                                href="{{ route('product.details', $category_product->slug) }}">
                                                                <figure>
                                                                    @if (count($category_product->multiImages) > 0)
                                                                        @foreach ($category_product->multiImages->slice(0, 2) as $image)
                                                                            @php
                                                                                $imagePath = 'storage/' . $image->photo;
                                                                                $imageSrc = file_exists(
                                                                                    public_path($imagePath),
                                                                                )
                                                                                    ? asset($imagePath)
                                                                                    : asset(
                                                                                        'frontend/img/no-product.jpg',
                                                                                    );
                                                                            @endphp
                                                                            <img src="{{ $imageSrc }}"
                                                                                alt="{{ $category_product->meta_title }}"
                                                                                width="210" height="210"
                                                                                style="object-fit: cover;" />
                                                                        @endforeach
                                                                    @else
                                                                        @php
                                                                            $thumbnailPath =
                                                                                'storage/' .
                                                                                $category_product->thumbnail;
                                                                            $thumbnailSrc = file_exists(
                                                                                public_path($thumbnailPath),
                                                                            )
                                                                                ? asset($thumbnailPath)
                                                                                : asset('frontend/img/no-product.jpg');
                                                                        @endphp
                                                                        <img src="{{ $thumbnailSrc }}"
                                                                            alt="{{ $category_product->meta_title }}"
                                                                            width="210" height="210"
                                                                            style="object-fit: cover;" />
                                                                    @endif
                                                                </figure>
                                                            </a>
                                                            <div class="ps-product__actions">
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Wishlist">
                                                                    <a class="add_to_wishlist"
                                                                        href="{{ route('wishlist.store', $category_product->id) }}">
                                                                        <i class="fa fa-heart-o"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Quick view"><a
                                                                        href="#" data-toggle="modal"
                                                                        data-target="#popupQuickview{{ $category_product->id }}"><i
                                                                            class="fa fa-search"></i></a></div>

                                                            </div>
                                                            @if (!empty($category_product->box_discount_price))
                                                                <div class="ps-product__badge">
                                                                    <div class="ps-badge ps-badge--sale">Offer</div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="ps-product__content">
                                                            <h5 class="ps-product__title">
                                                                <a
                                                                    href="{{ route('product.details', $category_product->slug) }}">
                                                                    {{ $category_product->name }}
                                                                </a>
                                                            </h5>
                                                            @if (Auth::check() && Auth::user()->status == 'active')
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
                                                                <a href="{{ route('cart.store', $category_product->id) }}"
                                                                    class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                                    data-product_id="{{ $category_product->id }}"
                                                                    data-product_qty="1">Add To
                                                                    Cart</a>
                                                            @else
                                                                <div class="ps-product__meta">
                                                                    <a href="{{ route('login') }}"
                                                                        class="btn btn-info btn-block">Login
                                                                        to view price</a>
                                                                </div>
                                                            @endif
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
                                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                                    data-placement="left" title="Add to cart"><a
                                                                        href="#"><i
                                                                            class="fa fa-shopping-basket"></i></a>
                                                                </div>
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Wishlist">
                                                                    <a class="add_to_wishlist"
                                                                        href="{{ route('wishlist.store', $category_product->id) }}">
                                                                        <i class="fa fa-heart-o"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="ps-product__item rotate"
                                                                    data-toggle="tooltip" data-placement="left"
                                                                    title="Add to compare"><a href="compare.html"><i
                                                                            class="fa fa-align-left"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 text-center">
                                                    <img class="" style="width: 320px;"
                                                        src="{{ asset('frontend/img/no-products-category.jpg') }}"
                                                        alt="">
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="ps-pagination">
                                        {{ $catProducts->links() }}
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
                        <p class="mb-0 text-dark">All Category</p>
                        <div class="ps-widget ps-widget--product px-0">
                            <div class="ps-widget__block pb-0">
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile nav nav-tabs border-0" id="myTab" role="tablist">
                                        @foreach ($categories as $allcategory)
                                            <li class="nav-item col-12 py-0 mb-0">
                                                <a class="nav-link p-4 {{ $allcategory->id == $category->id ? 'active' : '' }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($catProducts as $category_product)
        <div class="modal fade" id="popupQuickview{{ $category_product->id }}" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-hidden="true">
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
                                                @if ($category_product->multiImages->isNotEmpty())
                                                    @foreach ($category_product->multiImages->slice(0, 5) as $image)
                                                        @php
                                                            $imagePath = 'storage/' . $image->photo;
                                                            $imageSrc = file_exists(public_path($imagePath))
                                                                ? asset($imagePath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <div class="slide">
                                                            <img src="{{ $imageSrc }}"
                                                                alt="{{ $category_product->name }}" />
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @php
                                                        $thumbnailPath = 'storage/' . $category_product->thumbnail;
                                                        $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                            ? asset($thumbnailPath)
                                                            : asset('frontend/img/no-product.jpg');
                                                    @endphp
                                                    <div class="slide">
                                                        <img src="{{ $thumbnailSrc }}" alt="{{ $category_product->name }}" />
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ps-gallery--image">
                                                @if ($category_product->multiImages->isNotEmpty())
                                                    @foreach ($category_product->multiImages->slice(0, 5) as $image)
                                                        @php
                                                            $imagePath = 'storage/' . $image->photo;
                                                            $imageSrc = file_exists(public_path($imagePath))
                                                                ? asset($imagePath)
                                                                : asset('frontend/img/no-product.jpg');
                                                        @endphp
                                                        <div class="slide">
                                                            <div class="ps-gallery__item">
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $category_product->name }}" />
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @php
                                                        $thumbnailPath = 'storage/' . $category_product->thumbnail;
                                                        $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                            ? asset($thumbnailPath)
                                                            : asset('frontend/img/no-product.jpg');
                                                    @endphp
                                                    <div class="slide">
                                                        <div class="ps-gallery__item">
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $category_product->name }}" />
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="ps-product__info">
                                            <div class="ps-product__badge">
                                                <span
                                                    class="ps-badge ps-badge--instock">{{ $category_product->box_stock > 0 ? 'IN STOCK' : 'OUT OF STOCK' }}</span>
                                            </div>
                                            <div class="ps-product__branch">
                                                <a href="#">{{ $category_product->brand->name }}</a>
                                            </div>
                                            <h5 class="ps-product__title">
                                                <a href="{{ route('product.details', $category_product->slug) }}">
                                                    {{ $category_product->name }}
                                                </a>
                                            </h5>
                                            <div class="ps-product__desc">
                                                <p>{!! $category_product->short_description !!}</p>
                                            </div>
                                            @if (Auth::check() && Auth::user()->status == 'active')
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

                                                <div class="ps-product__quantity">
                                                    <h6>Quantity</h6>
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                class="icon-minus"></i></button>
                                                        <input class="quantity" min="1" name="quantity"
                                                            value="1" type="number"
                                                            data-product_id="{{ $category_product->id }}" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                class="icon-plus"></i></button>
                                                    </div>
                                                </div>

                                                <a class="ps-btn ps-btn--warning add_to_cart_btn_product_single"
                                                    data-product_id="{{ $category_product->id }}" href="#">Add to
                                                    cart</a>
                                            @else
                                                <div class="ps-product__meta">
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-info btn-block">Login to
                                                        view
                                                        price</a>
                                                </div>
                                            @endif
                                            <div class="ps-product__type">
                                                <ul class="ps-product__list">
                                                    @if ($category_product->tags)
                                                        <li>
                                                            <span class="ps-list__title">Tags: </span>
                                                            @foreach (json_decode($category_product->tags) as $tag)
                                                                <a class="ps-list__text"
                                                                    href="#">{{ $tag }}</a>
                                                                @if (!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    @endif
                                                    <li><span class="ps-list__title">SKU-Code: </span><a
                                                            class="ps-list__text"
                                                            href="#">{{ $category_product->sku_code }}</a>
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
    @endforeach
    @push('scripts')
        <!-- JavaScript Code -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var currentCategoryId = @json($category->id);

                function activateTab() {
                    var tabs = document.querySelectorAll('#myTab a');
                    tabs.forEach(function(tab) {
                        var tabId = tab.getAttribute('href').substring(1);
                        if (tabId === 'home' + currentCategoryId) {
                            tab.classList.add('active');
                            document.querySelector('#' + tabId).classList.add('show', 'active');
                        } else {
                            tab.classList.remove('active');
                            document.querySelector('#' + tabId).classList.remove('show', 'active');
                        }
                    });
                    updateCategoryContent(currentCategoryId);
                }

                function updateCategoryContent(categoryId) {
                    var selectedCategory = document.querySelector('#home' + categoryId);
                    var categoryNameElement = document.querySelector('.ps-categogy__name');
                    var bannerImageElement = document.querySelector('.ps-categogy__banner');

                    if (selectedCategory) {
                        var newName = selectedCategory.getAttribute('data-category-name');
                        var productCount = selectedCategory.getAttribute('data-product-count');
                        var newBannerImage = selectedCategory.getAttribute('data-banner-image');

                        if (newName && categoryNameElement) {
                            categoryNameElement.innerHTML = `${newName}<sup>(${productCount})</sup>`;
                        }

                        if (newBannerImage && bannerImageElement) {
                            bannerImageElement.src = newBannerImage;
                        }
                    }
                }

                activateTab();

                document.querySelectorAll('#myTab a').forEach(function(tab) {
                    tab.addEventListener('click', function(e) {
                        e.preventDefault();
                        var targetId = this.getAttribute('href').substring(1);

                        document.querySelectorAll('#myTab a').forEach(function(tab) {
                            tab.classList.remove('active');
                        });
                        document.querySelectorAll('.tab-pane').forEach(function(pane) {
                            pane.classList.remove('show', 'active');
                        });

                        this.classList.add('active');
                        var targetPane = document.getElementById(targetId);
                        targetPane.classList.add('show', 'active');

                        var categoryId = targetPane.getAttribute('data-category-id');
                        updateCategoryContent(categoryId);
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
