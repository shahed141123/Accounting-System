<x-frontend-app-layout :title="'All Products'">
    <div class="ps-categogy">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">Shop</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Shop</li>
            </ul>
            <h1 class="ps-categogy__name">Shop<sup>({{ $products->count() }})</sup></h1>
            <div class="ps-categogy__content">
                <div class="row row-reverse">
                    <div class="col-12 col-md-9">
                        <div class="ps-categogy__wrapper d-flex justify-content-center">
                            <div class="ps-categogy__sort w-100 text-left py-0">
                                <form>
                                    <span>Sort by</span>
                                    <select id="sort-by" class="form-select">
                                        <option value="latest">Latest</option>
                                        <option value="oldest">Latest</option>
                                        <option value="name-asc">Product Name Ascending(A to Z)</option>
                                        <option value="name-desc">Product Name Descendind(Z to A)</option>
                                        <option value="price-asc">Price: low to high</option>
                                        <option value="price-desc">Price: high to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="ps-categogy__show w-100 text-right py-0">
                                <form>
                                    <span>Show</span>
                                    <select id="show-per-page" class="form-select w-auto">
                                        <option value="10" selected>10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        <div class="ps-categogy--list">
                            @include('frontend.pages.product.partial.getProduct')
                        </div>
                        <div class="ps-pagination">
                            {{ $products->links() }}
                        </div>
                        <div class="ps-delivery"
                            style="background-image: url({{ asset('frontend/promotion/banner-delivery-2.jpg') }});">
                            <div class="ps-delivery__content">
                                <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100%
                                            Secure delivery </strong>without contacting the courier</span></div>
                                <a class="ps-delivery__more" href="{{ route('termsCondition') }}">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Categories</h4><a class="ps-block-control"
                                    href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile">
                                        @foreach ($categories as $category)
                                            <li>
                                                <input type="checkbox" class="category-filter"
                                                    data-id="{{ $category->id }}" id="category_{{ $category->name }}" />
                                                <label class="label"
                                                    for="category_{{ $category->name }}">{{ $category->name }}</label>
                                                @foreach ($category->children as $subCat)
                                                    <span class="sub-toggle">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </span>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <input type="checkbox" class="subcategory-filter"
                                                                data-id="{{ $subCat->id }}" /> {{ $subCat->name }}
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">By price</h4><a class="ps-block-control" href="#"><i
                                        class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__price">
                                        <div id="slide-price" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                    </div>
                                    <div class="ps-widget__input">
                                        <span class="ps-price" id="slide-price-min">£1.00</span><span
                                            class="bridge">-</span><span class="ps-price"
                                            id="slide-price-max">£10000.00</span>
                                        <input type="hidden" id="price-min" name="price_min" value="1" />
                                        <input type="hidden" id="price-max" name="price_max" value="10000" />
                                    </div>
                                    <button id="price-filter" class="ps-widget__filter">Filter</button>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Brands</h4><a class="ps-block-control" href="#"><i
                                        class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    @foreach ($brands as $brand)
                                        <div class="ps-widget__item">
                                            <input type="checkbox" class="brand-filter"
                                                data-id="{{ $brand->id }}" /> {{ $brand->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="ps-widget__promo">
                                <img src="{{ asset('frontend/img/banner-sidebar1.jpg') }}" alt="">
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
                // Initialize noUiSlider
                var priceSlider = document.getElementById('slide-price');
                noUiSlider.create(priceSlider, {
                    start: [1, 10000], // Default values
                    connect: true,
                    range: {
                        'min': [0],
                        'max': [10000]
                    },
                    step: 1,
                    format: {
                        to: function(value) {
                            return '£' + value.toFixed(2);
                        },
                        from: function(value) {
                            return Number(value.replace('£', ''));
                        }
                    }
                });

                // Update hidden inputs and displayed values, and trigger filtering
                priceSlider.noUiSlider.on('update', function(values, handle) {
                    $('#slide-price-min').text(values[0]);
                    $('#slide-price-max').text(values[1]);
                    $('#price-min').val(values[0].replace('£', ''));
                    $('#price-max').val(values[1].replace('£', ''));

                    // Trigger filtering when slider values change
                    filterProducts();
                });

                function filterProducts() {
                    let categories = [];
                    let subcategories = [];
                    let brands = [];
                    let priceMin = $('#price-min').val();
                    let priceMax = $('#price-max').val();
                    let sortBy = $('#sort-by').val();
                    let showPage = $('#show-per-page').val();

                    $('.category-filter:checked').each(function() {
                        categories.push($(this).data('id'));
                    });

                    $('.subcategory-filter:checked').each(function() {
                        subcategories.push($(this).data('id'));
                    });

                    $('.brand-filter:checked').each(function() {
                        brands.push($(this).data('id'));
                    });

                    $.ajax({
                        url: '{{ route('products.filter') }}',
                        method: 'GET',
                        data: {
                            categories: categories,
                            subcategories: subcategories,
                            brands: brands,
                            price_min: priceMin,
                            price_max: priceMax,
                            sort_by: sortBy,
                            showPage: showPage,
                        },
                        success: function(response) {
                            $('.ps-categogy--list').html(response);
                        }
                    });
                }

                // Trigger filtering on change
                $('.category-filter, .subcategory-filter, .brand-filter, #sort-by, #price-filter, #show-per-page').on('change',
                    function() {
                        filterProducts();
                    });

                // Initial filtering
                filterProducts();
            });
        </script>
    @endpush
</x-frontend-app-layout>
