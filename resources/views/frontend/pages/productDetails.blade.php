<x-frontend-app-layout :title="'Product Details'">
    <div class="ps-page--product3">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('home') }}">Home</a></li>
                <li class="ps-breadcrumb__item"><a href="{{ route('all.products') }}">All Products</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">{{ $product->name }}</li>
            </ul>
            <div class="ps-page__content">
                <div class="ps-product--detail">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div class="ps-product--gallery">
                                        <div class="ps-product__thumbnail">
                                            @foreach ($product->multiImages as $image)
                                                <div class="slide">
                                                    <img src="{{ asset('storage/' . $image->photo) }}"
                                                        alt="{{ $product->meta_title }}" />
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="ps-gallery--image">
                                            @foreach ($product->multiImages as $image)
                                                <div class="slide">
                                                    <div class="ps-gallery__item">
                                                        <img src="{{ asset('storage/' . $image->photo) }}"
                                                            alt="{{ $product->meta_title }}" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="ps-product__info">
                                        <div class="ps-product__title text-22">
                                            <a href="javascript:void(0)">{{ $product->name }}</a>
                                        </div>
                                        <table class="table ps-table ps-table--oriented m-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-table__th">CODE</th>
                                                    <td>{{ $product->sku_code }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">BARCODE </th>
                                                    <td>{{ $product->sku_code }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">Length </th>
                                                    <td>{{ $product->length }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">Length </th>
                                                    <td>{{ $product->width }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">Length </th>
                                                    <td>{{ $product->height }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">BRAND </th>
                                                    <td>{{ $product->brand->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">NO. OF CARTONS </th>
                                                    <td>{{ $product->box_stock }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-table__th">PALLET QUANTITY </th>
                                                    <td>{{ $product->box_stock * $product->box_contains }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="ps-product__group mt-20">
                                            <table class="table ps-table ps-table--oriented m-0">
                                                <tr>
                                                    <th>Case Qty.</th>
                                                    <th>Unit Price</th>
                                                    <th>Stock</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $product->box_contains }}</td>
                                                    <td>{{ $product->unit_price }}</td>
                                                    <td>
                                                        @if (!empty($product->box_stock) && $product->box_stock > 0)
                                                            <i class="fa fa-check"></i>
                                                        @else
                                                            <span class="text-danger">X</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-product__feature">
                                @if (!empty($product->box_stock) && $product->box_stock > 0)
                                    <div class="ps-product__badge"><span
                                            class="ps-badge bg-success">{{ $product->box_stock }} In
                                            Stock</span>
                                    </div>
                                @else
                                    <div class="ps-product__badge"><span class="ps-badge ps-badge--outstock">Out Of
                                            Stock</span>
                                    </div>
                                @endif
                                @auth
                                    @if (!empty($product->box_discount_price))
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£{{ $product->box_discount_price }}</span><span
                                                class="ps-product__del">£{{ $product->box_price }}</span>
                                        </div>
                                    @else
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale">£{{ $product->box_price }}</span>
                                        </div>
                                    @endif
                                @else
                                    <div class="ps-product__meta">
                                        <a href="{{ route('login') }}" class="btn btn-info btn-block">Login
                                            to view price</a>
                                    </div>
                                @endauth
                                <div class="ps-product__quantity">
                                    <h6>Quantity</h6>
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1"
                                            type="number" />
                                        <button class="plus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                class="icon-plus"></i></button>
                                    </div>
                                </div>

                                <ul class="ps-product__bundle">
                                    <li><i class="icon-wallet"></i>100% Money back</li>
                                    <li><i class="icon-bag2"></i>Non-contact shipping</li>
                                    <li><i class="icon-truck"></i>Free delivery order over £500</li>
                                </ul>
                                <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                    data-target="#popupAddcartV2">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__content">
                        <ul class="nav nav-tabs ps-tab-list" id="productContentTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-toggle="tab"
                                    href="#description-content" role="tab" aria-controls="description-content"
                                    aria-selected="true">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="information-tab" data-toggle="tab" href="#information-content"
                                    role="tab" aria-controls="information-content" aria-selected="false">
                                    Description
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="specification-tab" data-toggle="tab"
                                    href="#specification-content" role="tab"
                                    aria-controls="specification-content" aria-selected="false">
                                    Specification
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews-content"
                                    role="tab" aria-controls="reviews-content" aria-selected="false">
                                    Reviews (5)
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="productContent">
                            <div class="tab-pane fade show active" id="description-content" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="ps-document">
                                    <div class="row row-reverse">
                                        <div class="col-12">
                                            {!! $product->overview !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="information-content" role="tabpanel"
                                aria-labelledby="information-tab">
                                <div class="ps-document">
                                    <div class="row row-reverse">
                                        <div class="col-12">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="specification-content" role="tabpanel"
                                aria-labelledby="specification-tab">
                                <div class="ps-document">
                                    <div class="row row-reverse">
                                        <div class="col-12">
                                            {!! $product->specification !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews-content" role="tabpanel"
                                aria-labelledby="reviews-tab">
                                <div class="ps-product__tabreview">
                                    {{-- <div class="ps-review--product">
                                        <div class="ps-review__row">
                                            <div class="ps-review__avatar"><img src="img/avatar/avatar-review.html"
                                                    alt="alt" /></div>
                                            <div class="ps-review__info">
                                                <div class="ps-review__name">Mark J.</div>
                                                <div class="ps-review__date">Oct 30, 2021</div>
                                            </div>
                                            <div class="ps-review__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="ps-review__desc">
                                                <p>Everything is perfect. I would recommend!</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="ps-form--review">
                                    <div class="ps-form__title">Write a review</div>
                                    <div class="ps-form__desc">Your email address will not be published. Required
                                        fields are marked *</div>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <label class="ps-form__label">Your rating *</label>
                                                <select class="ps-rating--form" data-value="0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <label class="ps-form__label">Name *</label>
                                                <input class="form-control ps-form__input">
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <label class="ps-form__label">Email *</label>
                                                <input class="form-control ps-form__input">
                                            </div>
                                            <div class="col-12">
                                                <div class="ps-form__block">
                                                    <label class="ps-form__label">Your review *</label>
                                                    <textarea class="form-control ps-form__textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn ps-btn ps-btn--warning">Add Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="ps-section--also" data-background="img/related-bg.jpg">
                        <div class="container">
                            <h3 class="ps-section__title">Customer also bought</h3>
                            <div class="ps-section__carousel">
                                <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true"
                                    data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                                    data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
                                    data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000"
                                    data-owl-mousedrag="on">
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                    href="product-details.html">
                                                    <figure><img src="img/products/medicine1.jpg"
                                                            alt="alt" /><img src="img/products/medicine3.jpg"
                                                            alt="alt" />
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
                                                <h5 class="ps-product__title"><a href="product-details.html">3-layer
                                                        mask with an elastic band (1 piece)</a></h5>
                                                <div class="ps-product__meta">
                                                    <button class="btn btn-info btn-block">Login to view price</button>
                                                    <!-- <span class="ps-product__price sale">£9.99</span>
                                                    <span class="ps-product__del">$38.24</span> -->
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
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="ps-delivery" data-background="img/promotion/banner-delivery-2.jpg">
                <div class="ps-delivery__content">
                    <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100% Secure
                                delivery </strong>without contacting the courier</span></div><a
                        class="ps-delivery__more" href="#">More</a>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
