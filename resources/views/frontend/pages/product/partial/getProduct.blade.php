@foreach ($products as $product)
    <div class="ps-product ps-product--list">
        <div class="ps-product__content">
            <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                    <figure><img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}">
                    </figure>
                </a>
                <div class="ps-product__actions">
                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title=""
                        data-original-title="Quick view"><a href="#" data-toggle="modal"
                            data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                </div>
                <div class="ps-product__badge">
                </div>
            </div>
            <div class="ps-product__info">
                {{-- <a class="ps-product__branch"
                                                href="{{ route('category.products', $product->category->slug) }}">
                                                {{ $product->category->name }}
                                            </a> --}}
                <h5 class="ps-product__title shop_product-title">
                    <a href="{{ route('product.details', $product->slug) }}">
                        {{ $product->name }}

                    </a>
                </h5>
                <div class="ps-product__desc">
                    {!! $product->short_description !!}
                </div>
            </div>
        </div>
        <div class="ps-product__footer">
            @if (Auth::check() && Auth::user()->status == 'active')
                @if (!empty($product->box_discount_price))
                    <div class="ps-product__meta">
                        <span class="ps-product__price sale">£{{ $product->box_discount_price }}</span>
                        <span class="ps-product__del">£{{ $product->box_price }}</span>
                    </div>
                @else
                    <div class="ps-product__meta">
                        <span class="ps-product__price sale">£{{ $product->box_price }}</span>
                    </div>
                @endif

                <div class="ps-product__quantity">
                    <h6>Quantity</h6>
                    <div class="def-number-input number-input safari_only">
                        <button class="minus"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                class="icon-minus"></i></button>
                        <input class="quantity" min="1" name="quantity" value="1" type="number"
                            data-product_id="{{ $product->id }}" />
                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                class="icon-plus"></i></button>
                    </div>
                </div>

                <a class="ps-btn ps-btn--warning add_to_cart_btn_product_single" data-product_id="{{ $product->id }}"
                    href="#">Add to cart</a>
            @else
                <div class="ps-product__meta">
                    <a href="{{ route('login') }}" class="btn btn-info btn-block">Login to
                        view
                        price</a>
                </div>
            @endif

            <div class="ps-product__variations"><a class="ps-product__link add_to_wishlist"
                    href="{{ route('wishlist.store', $product->id) }}">Add to wishlist</a>
            </div>
        </div>
    </div>
@endforeach
