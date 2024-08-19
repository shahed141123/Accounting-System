<x-frontend-app-layout :title="'Quick Order'">
    <div class="breadcrumb-wrap">
        <div class="banner b-top bg-size bread-img">
            <img class="bg-img bg-top" src="{{ asset('frontend/img/banner-p.jpg') }}" alt="banner" style="display: none;">
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
                                {{-- <div class="ps-shopping__footer pt-3 mb-3">
                                    <div class="ps-shopping__coupon">
                                        <input class="form-control ps-input" type="text"
                                            placeholder="Search your product">
                                        <button class="ps-btn ps-btn--primary" type="button">Product Search</button>
                                    </div>
                                    <div class="ps-shopping__button">
                                        <button class="ps-btn ps-btn--primary" type="button">Add To Cart</button>
                                        <button class="ps-btn ps-btn--primary" type="button">Checkout</button>
                                    </div>
                                </div> --}}
                                {{-- <ul class="ps-shopping__list">
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
                                </ul> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped quick_order_table">
                                        <thead>
                                            <tr>
                                                <th width="8%">SL</th>
                                                <th width="12%">Image</th>
                                                <th width="49%">Name</th>
                                                <th width="16%">Status</th>
                                                <th width="13%">Price</th>
                                                <th width="10%">To Cart</th>
                                                {{-- <th>In Stock</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example Row -->
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                                                class="" width="50px" height="50px"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>
                                                        @if (!empty($product->box_stock) && $product->box_stock > 0)
                                                            <span class="ps-badge bg-success">
                                                                {{ $product->box_stock }} In Stock</span>
                                                        @else
                                                            <span class="ps-badge ps-badge--outstock">Out Of
                                                                Stock</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!empty($product->box_discount_price))
                                                            <div class="ps-product__meta">
                                                                <span
                                                                    class="ps-product__price sale">£{{ $product->box_discount_price }}</span>
                                                                <span
                                                                    class="ps-product__del">£{{ $product->box_price }}</span>
                                                            </div>
                                                        @else
                                                            <div class="ps-product__meta"><span
                                                                    class="ps-product__price sale">£{{ $product->box_price }}</span>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="add_to_cart"
                                                            href="{{ route('cart.store', $product->id) }}"
                                                            data-product_id="{{ $product->id }}" data-product_qty="1">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <!-- Additional rows go here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="col-6 col-md-6 offset-6 col-lg-6">
                                <div class="ps-shopping__checkout text-right"><a class="ps-btn ps-btn--warning"
                                        href="checkout.html">Proceed to checkout</a></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="ps-section--latest mb-0">
                        <div class="container">
                            <h3 class="ps-section__title mt-50">You may be interested in…</h3>
                            <div class="dealCarousel owl-carousel">
                                @foreach ($related_products as $related_product)
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.details', $related_product->slug) }}">
                                                    <figure>
                                                        @if (count($related_product->multiImages) > 0)
                                                            @foreach ($related_product->multiImages->slice(0, 2) as $image)
                                                                @php
                                                                    $imagePath = 'storage/' . $image->photo;
                                                                    $imageSrc = file_exists(public_path($imagePath))
                                                                        ? asset($imagePath)
                                                                        : asset('frontend/img/no-product.jpg');
                                                                @endphp
                                                                <img src="{{ $imageSrc }}"
                                                                    alt="{{ $related_product->meta_title }}"
                                                                    width="210" height="210"
                                                                    style="object-fit: cover;" />
                                                            @endforeach
                                                        @else
                                                            @php
                                                                $thumbnailPath =
                                                                    'storage/' . $related_product->thumbnail;
                                                                $thumbnailSrc = file_exists(public_path($thumbnailPath))
                                                                    ? asset($thumbnailPath)
                                                                    : asset('frontend/img/no-product.jpg');
                                                            @endphp
                                                            <img src="{{ $thumbnailSrc }}"
                                                                alt="{{ $related_product->meta_title }}" width="210"
                                                                height="210" style="object-fit: cover;" />
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $related_product->id) }}">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Quick view"><a href="#"
                                                            data-toggle="modal"
                                                            data-target="#popupQuickview{{ $related_product->id }}"><i
                                                                class="fa fa-search"></i></a></div>

                                                </div>
                                                @if (!empty($related_product->box_discount_price))
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Offer</div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.details', $related_product->slug) }}">
                                                        {{ $related_product->name }}
                                                    </a>
                                                </h5>
                                                @if (Auth::check() && Auth::user()->status == 'active')
                                                    @if (!empty($related_product->box_discount_price))
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $related_product->box_discount_price }}</span>
                                                            <span
                                                                class="ps-product__del">£{{ $related_product->box_price }}</span>
                                                        </div>
                                                    @else
                                                        <div class="ps-product__meta">
                                                            <span
                                                                class="ps-product__price sale">£{{ $related_product->box_price }}</span>
                                                        </div>
                                                    @endif
                                                    <a href="{{ route('cart.store', $related_product->id) }}"
                                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                                        data-product_id="{{ $related_product->id }}"
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
                                                        data-placement="left" title="Add to cart"><a
                                                            href="#"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a class="add_to_wishlist"
                                                            href="{{ route('wishlist.store', $related_product->id) }}">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip"
                                                        data-placement="left" title="Add to compare"><a
                                                            href="compare.html"><i class="fa fa-align-left"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.quick_order_table').DataTable({
                    // "columnDefs": [{
                    //         "orderable": false,
                    //         "targets": 0
                    //     } // Disable sorting for the first column
                    // ],
                    "paging": true,
                    "orderable": false,
                    "searching": true,
                    "ordering": true,
                    "info": true
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
