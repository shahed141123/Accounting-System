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
                                        <option value="popularity">Popularity</option>
                                        <option value="rating">Average rating</option>
                                        <option value="price-asc">Price: low to high</option>
                                        <option value="price-desc">Price: high to low</option>
                                    </select>
                                </form>
                            </div>
                            <div class="ps-categogy__show w-100 text-right py-0">
                                <form>
                                    <span>Show</span>
                                    <select id="show-per-page" class="form-select w-auto">
                                        <option value="12" selected>12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="48">48</option>
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
                            data-background="{{ asset('frontend/img/promotion/banner-delivery-2.jpg') }}"
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
                // Initialize price slider
                var priceSlider = document.getElementById('slide-price');
                noUiSlider.create(priceSlider, {
                    start: [1, 10000],
                    connect: true,
                    range: {
                        'min': 1,
                        'max': 10000
                    },
                    format: {
                        to: function(value) {
                            return '£' + Math.round(value);
                        },
                        from: function(value) {
                            return Number(value.replace('£', ''));
                        }
                    }
                });

                priceSlider.noUiSlider.on('update', function(values, handle) {
                    $('#price-min').val(values[0].replace('£', ''));
                    $('#price-max').val(values[1].replace('£', ''));
                });

                // Function to get products


                // Apply filters, sorting, and pagination
                $('.category-filter, .subcategory-filter, .brand-filter').on('change', getProducts);
                $('#price-filter').on('click', getProducts);
                $('#sort-by').on('change', getProducts);
                $('#show-per-page').on('change', getProducts);
            });

            function getProducts() {
                var categories = $('.category-filter:checked').map(function() {
                    return $(this).data('id');
                }).get();
                var subcategories = $('.subcategory-filter:checked').map(function() {
                    return $(this).data('id');
                }).get();
                var brands = $('.brand-filter:checked').map(function() {
                    return $(this).data('id');
                }).get();
                var priceMin = $('#price-min').val();
                var priceMax = $('#price-max').val();
                var sortBy = $('#sort-by').val();
                var showPerPage = $('#show-per-page').val();

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
                        show_per_page: showPerPage
                    },
                    success: function(response) {
                        $('.ps-categogy--list').html(response.products);
                        $('.ps-pagination').html(response.pagination);
                    }
                });
            }
        </script>
    @endpush
</x-frontend-app-layout>
