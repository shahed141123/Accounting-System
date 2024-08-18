<x-frontend-app-layout :title="'All Products'">
    <style>
        /* Ensure all elements use border-box sizing */
        .checkbox-shop * {
            box-sizing: border-box;
        }

        .checkbox-shop .cbx {
            -webkit-user-select: none;
            user-select: none;
            cursor: pointer;
            padding: 15px 20px;
            border-radius: 6px;
            font-size: 17px;
            line-height: 24px;
            font-weight: 500;
            font-style: normal;
            color: #103178;
            overflow: hidden;
            transition: background 0.2s ease, border-color 0.2s ease;
            display: inline-block;
            background: #fff;
            position: relative;
        }

        /* Adjust spacing between checkboxes */
        .checkbox-shop .cbx:not(:last-child) {
            margin-right: 6px;
        }

        /* Hover effect */
        .checkbox-shop .cbx:hover {
            background: rgba(0, 119, 255, 0.06);
        }

        /* Styling for checkbox and SVG */
        .checkbox-shop .cbx span {
            float: left;
            vertical-align: middle;
        }

        .checkbox-shop .cbx span:first-child {
            position: relative;
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 1px solid #cccfdb;
            transition: border-color 0.2s ease;
            box-shadow: 0 1px 1px rgba(0, 16, 75, 0.05);
        }

        .checkbox-shop .cbx span:first-child svg {
            position: absolute;
            top: 3px;
            left: 2px;
            fill: none;
            stroke: #fff;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 16px;
            stroke-dashoffset: 16px;
            transition: stroke-dashoffset 0.3s ease 0.1s;
        }

        /* Label text styling */
        .checkbox-shop .cbx span:last-child {
            padding-left: 8px;
            line-height: 18px;
        }

        /* Checked state background */
        .checkbox-shop .inp-cbx:checked+.cbx {
            background: rgba(0, 119, 255, 0.06);
        }

        .checkbox-shop .inp-cbx:checked+.cbx span:first-child {
            background: #07f;
            border-color: #07f;
        }

        .checkbox-shop .inp-cbx:checked+.cbx span:first-child svg {
            stroke-dashoffset: 0;
            fill: #0077ff;
            /* Change color of the SVG when checked */
        }

        /* Hide default checkbox appearance */
        .checkbox-shop .inp-cbx {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Style for inline SVG */
        .checkbox-shop .inline-svg {
            display: none;
        }

        /* Responsive design for small screens */
        @media screen and (max-width: 640px) {
            .checkbox-shop .cbx {
                width: 100%;
                display: inline-block;
            }
        }

        /* Keyframes for checked state animation */
        @keyframes wave-4 {
            50% {
                transform: scale(0.9);
            }
        }
    </style>
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
                                    <ul class="">
                                        @foreach ($categories as $category)
                                            <li>

                                                <div class="checkbox-shop">
                                                    <input type="checkbox" class="category-filter inp-cbx"
                                                        data-id="{{ $category->id }}"
                                                        id="category_{{ $category->name }}" />
                                                    <label class="cbx" for="category_{{ $category->name }}">
                                                        <span>
                                                            <svg width="12px" height="10px">
                                                                <use xlink:href="#check-4"></use>
                                                            </svg>
                                                        </span>
                                                        <span>{{ $category->name }}</span>
                                                    </label>
                                                    <svg class="inline-svg">
                                                        <symbol id="check-4" viewbox="0 0 12 10">
                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                        </symbol>
                                                    </svg>
                                                </div>

                                                {{-- <input type="checkbox" class="category-filter"
                                                    data-id="{{ $category->id }}" id="category_{{ $category->name }}" />
                                                <label class="label"
                                                    for="category_{{ $category->name }}">{{ $category->name }}</label> --}}



                                                @foreach ($category->children as $subCat)
                                                    <span class="sub-toggle">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </span>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <div class="checkbox-shop">
                                                                <input type="checkbox"
                                                                    class="subcategory-filter inp-cbx"
                                                                    data-id="{{ $subCat->id }}"
                                                                    id="category_{{ $subCat->name }}" />
                                                                <label class="cbx"
                                                                    for="category_{{ $subCat->name }}">
                                                                    <span>
                                                                        <svg width="12px" height="10px">
                                                                            <use xlink:href="#check-4"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <span>{{ $subCat->name }}</span>
                                                                </label>
                                                                <svg class="inline-svg">
                                                                    <symbol id="check-4" viewbox="0 0 12 10">
                                                                        <polyline points="1.5 6 4.5 9 10.5 1">
                                                                        </polyline>
                                                                    </symbol>
                                                                </svg>
                                                            </div>
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


                                            <div class="checkbox-shop">
                                                <input type="checkbox" class="brand-filter inp-cbx"
                                                    data-id="{{ $brand->id }}"
                                                    id="category_{{ $brand->name }}" />
                                                <label class="cbx" for="category_{{ $brand->name }}">
                                                    <span>
                                                        <svg width="12px" height="10px">
                                                            <use xlink:href="#check-4"></use>
                                                        </svg>
                                                    </span>
                                                    <span>{{ $brand->name }}</span>
                                                </label>
                                                <svg class="inline-svg">
                                                    <symbol id="check-4" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </div>
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
                $('.category-filter, .subcategory-filter, .brand-filter, #sort-by, #price-filter, #show-per-page').on(
                    'change',
                    function() {
                        filterProducts();
                    });

                // Initial filtering
                filterProducts();
            });
        </script>
    @endpush
</x-frontend-app-layout>
