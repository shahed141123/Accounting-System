<x-frontend-app-layout :title="'Category Details'">
    <div class="ps-categogy ps-categogy--dark">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">{{ $category->name }}</li>
            </ul>
            <h1 class="ps-categogy__name">{{ $category->name }}<sup>({{ $category->products->count() }})</sup></h1>
            <div class="ps-categogy__content">
                <div class="row row-reverse">
                    <div class="col-12 col-md-9">
                        <div class="ps-categogy--grid">
                            <div class="row m-0">
                                @foreach ($category->products as $product) 
                                    <div class="col-6 col-lg-4 col-xl-3 p-0">                                        
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="{{ route('product.details',$product->slug) }}">
                                                    <figure>
                                                        @foreach ($product->multiImages->slice(0, 2) as $image) 
                                                            <img src="{{ asset($image->photo) }}" alt="alt" />
                                                        @endforeach
                                                    </figure>
                                                </a>
                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Wishlist">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>                                                    
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Quick view">
                                                        <a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                                        <a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ps-product__badge">
                                                    <div class="ps-badge ps-badge--sale">Sale</div>
                                                </div>
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.details',$product->slug) }}">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>
                                                <div class="ps-product__meta">
                                                    <span class="ps-product__price sale">{{ $product->box_discount_price }}</span>
                                                    <span class="ps-product__del">{{ $product->box_price }}</span>
                                                </div>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span class="ps-product__review">( Reviews)</span>
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
                                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                            <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Add to cart</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Add to cart"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Add to compare"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                @endforeach
                                <div class="col-6 col-lg-4 col-xl-3 p-0"> 
                                    <a class="ps-nextpage" href="#"><span class="ps-nextpage__text">
                                        Next <br>page</span>
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-pagination">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-delivery ps-delivery--info" data-background="img/promotion/banner-delivery-3.jpg">
                            <div class="ps-delivery__content">
                                <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>100% Secure delivery </strong>without contacting the courier</span></div><a class="ps-delivery__more" href="#">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Categories</h4><a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile">
                                        <li><a href="#">Diagnosis</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Biopsy tools</a></li>
                                                <li><a href="#">Endoscopes</a></li>
                                                <li><a href="#">Monitoring</a></li>
                                                <li><a href="#">Otoscopes</a></li>
                                                <li><a href="#">Oxygen concentrators</a></li>
                                                <li><a href="#">Tables and assistants</a></li>
                                                <li><a href="#">Thermometer</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Equipment</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Blades</a></li>
                                                <li><a href="#">Education</a></li>
                                                <li><a href="#">Germicidal lamps</a></li>
                                                <li><a href="#">Heart Health</a></li>
                                                <li><a href="#">Infusion stands</a></li>
                                                <li><a href="#">Lighting</a></li>
                                                <li><a href="#">Machines</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Higiene</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Disposable products</a></li>
                                                <li><a href="#">Face masks</a></li>
                                                <li><a href="#">Gloves</a></li>
                                                <li><a href="#">Protective covers</a></li>
                                                <li><a href="#">Sterilization</a></li>
                                                <li><a href="#">Surgical foils</a></li>
                                                <li><a href="#">Uniforms</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Laboratory</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Devices</a></li>
                                                <li><a href="#">Diagnostic tests</a></li>
                                                <li><a href="#">Disinfectants</a></li>
                                                <li><a href="#">Dyes</a></li>
                                                <li><a href="#">Pipettes</a></li>
                                                <li><a href="#">Test-tubes</a></li>
                                                <li><a href="#">Tubes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tools</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Accessories Tools</a></li>
                                                <li><a href="#">Blood pressure</a></li>
                                                <li><a href="#">Capsules</a></li>
                                                <li><a href="#">Dental</a></li>
                                                <li><a href="#">Micrscope</a></li>
                                                <li><a href="#">Pressure</a></li>
                                                <li><a href="#">Sugar level</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Wound Care</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="#">Bandages</a></li>
                                                <li><a href="#">Gypsum foundations</a></li>
                                                <li><a href="#">Patches and tapes</a></li>
                                                <li><a href="#">Stomatology</a></li>
                                                <li><a href="#">Surgical sutures</a></li>
                                                <li><a href="#">Uniforms</a></li>
                                                <li><a href="#">Wound healing</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">By price</h4><a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__price">
                                        <div id="slide-price"></div>
                                    </div>
                                    <div class="ps-widget__input"><span class="ps-price" id="slide-price-min">$0</span><span class="bridge">-</span><span class="ps-price" id="slide-price-max">$820</span></div>
                                    <button class="ps-widget__filter">Filter</button>
                                </div>
                            </div>
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Ratings</h4><a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="rating5">
                                            <label class="custom-control-label" for="rating5"> </label>
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
                                            <label class="custom-control-label" for="rating4"> </label>
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
                            <div class="ps-widget__promo"><img src="img/banner-sidebar1.jpg" alt></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-section--newsletter ps-section--newsletter-inline">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <h3 class="ps-section__title">Join our newsletter and get £5 discount for your first order</h3>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="ps-section__content">
                            <form action="http://nouthemes.net/html/mymedi/do_action" method="post">
                                <div class="ps-form--subscribe">
                                    <div class="ps-form__control">
                                        <input class="form-control ps-input" type="email" placeholder="Enter your email address">
                                        <button class="ps-btn ps-btn--warning">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-frontend-app-layout>
