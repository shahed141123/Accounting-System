@if (
    (is_countable($brands) && count($brands) > 0) ||
        (is_countable($categorys) && count($categorys) > 0) ||
        (is_countable($products) && count($products) > 0) ||
        (is_countable($blogs) && count($blogs) > 0))
    <div class="ps-result__content">
        <div class="row m-0">
            <div class="col-12 col-lg-5">
                <div class="row mb-4">
                    @if (is_countable($brands) && count($brands) > 0)
                        <div class="col-lg-6 col-5">
                            <h4 class="fw-bold border-bottom">Brands</h4>
                            @foreach ($brands as $brand)
                                <h4><a class="search_titles" href="#">{{ $brand->name }}</a></h4>
                            @endforeach
                        </div>
                    @endif
                    @if (is_countable($categorys) && count($categorys) > 0)
                        <div class="col-lg-6 col-7">
                            <h4 class="fw-bold border-bottom">Categorys</h4>
                            @foreach ($categorys as $category)
                                <h4>
                                    <a class="search_titles"
                                        href="{{ route('category.products', $category->slug) }}">{{ $category->name }}</a>
                                </h4>
                            @endforeach
                        </div>
                    @endif
                </div>
                @if (is_countable($blogs) && count($blogs) > 0)
                    <div class="row mt-2 mb-4">
                        <h4 class="fw-bold border-bottom">Blogs</h4>
                        <div class="col-12">
                            @foreach ($blogs as $blog)
                                <h4>
                                    <a class="search_titles"href="{{ route('blog.details', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12 col-lg-7">
                @if (count($products) > 0)
                    @foreach ($products as $search_product)
                        <div class="ps-product ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a class="ps-product__image"
                                    href="{{ route('product.details', $search_product->slug) }}">
                                    <figure>
                                        <img src="{{ asset('storage/' . $search_product->thumbnail) }}" alt="alt">
                                    </figure>
                                </a>
                            </div>
                            <div class="ps-product__content">
                                <h4 class="ps-product__title" style="height: auto; min-height:auto">
                                    <a href="{{ route('product.details', $search_product->slug) }}">
                                        {{ $search_product->name }}
                                    </a>
                                </h4>
                                <p class="ps-product__desc" style="display: block">{!! $search_product->short_description !!}</p>
                                @if (Auth::check() && Auth::user()->status == 'active')
                                    @if (!empty($search_product->box_discount_price))
                                        <div class="ps-product__meta">
                                            <span
                                                class="ps-product__price sale">£{{ $search_product->box_discount_price }}</span>
                                            <span class="ps-product__del">£{{ $search_product->box_price }}</span>
                                        </div>
                                    @else
                                        <div class="ps-product__meta">
                                            <span
                                                class="ps-product__price sale">£{{ $search_product->box_price }}</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('cart.store', $search_product->id) }}"
                                        class="btn ps-btn--warning my-3 btn-block add_to_cart"
                                        data-product_id="{{ $search_product->id }}" data-product_qty="1">Add To
                                        Cart</a>
                                @else
                                    <div class="ps-product__meta">
                                        <a href="{{ route('login') }}" class="btn btn-info btn-block">Login
                                            to view price</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                        <h4 class="text-danger text-center">No Product Found. Search again.</h4>
                    </div>
                @endif
            </div>
        </div>
        <div class="ps-result__viewall"><a href="{{ route('allproducts') }}">View all</a></div>
    </div>
@else
    <div class="ps-result__content">
        <div class="row m-0">
            <div class="col-12 col-lg-5">
                <div class="text-center p-4">
                    <h4 style="color: #ae0a46;"> Nothing Found ! Search again.</h4>
                </div>
            </div>
        </div>
    </div>
@endif
