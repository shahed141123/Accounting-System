<x-frontend-app-layout :title="'Your Wishlist'">
    <div class="breadcrumb-wrap">
        <div class="banner b-top bg-size bread-img">
            <img class="bg-img bg-top" src="img/banner-p.jpg" alt="banner" style="display: none;">
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
    <div class="ps-wishlist">
        <div class="user-dashboard py-8">
            <div class="container">
                <div class="row g-3 g-xl-4 tab-wrap">
                    <div class="col-lg-4 col-xl-3 sticky">
                        <!-- Sidebar here -->
                        @include('user.layouts.sidebar')
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <h3 class="ps-wishlist__title">My wishlist</h3>
                        <div class="ps-wishlist__content">
                            <ul class="ps-wishlist__list">
                                <li>
                                    <div class="ps-product ps-product--wishlist">
                                        <div class="ps-product__remove"><a href="#"><i class="icon-cross"></i></a>
                                        </div>
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="product1.html">
                                                <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                        alt="alt"><img
                                                        src="{{ asset('frontend/img/products/001.jpg') }}"
                                                        alt="alt">
                                                </figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="product1.html">Digital Thermometer
                                                    X30-Pro</a></h5>
                                            <div class="ps-product__row">
                                                <div class="ps-product__label">Price:</div>
                                                <div class="ps-product__value"><span
                                                        class="ps-product__price sale">$77.65</span><span
                                                        class="ps-product__del">$80.65</span>
                                                </div>
                                            </div>
                                            <div class="ps-product__row ps-product__stock">
                                                <div class="ps-product__label">Stock:</div>
                                                <div class="ps-product__value"><span class="ps-product__out-stock">Out
                                                        of stock </span>
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
                                                <div class="ps-product__value">$77.65</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="ps-product ps-product--wishlist">
                                        <div class="ps-product__remove"><a href="#"><i class="icon-cross"></i></a>
                                        </div>
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="product1.html">
                                                <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                        alt="alt">
                                                </figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="product1.html">Hill-Rom Affinity III
                                                    Progressa iBed</a></h5>
                                            <div class="ps-product__row">
                                                <div class="ps-product__label">Price:</div>
                                                <div class="ps-product__value"><span
                                                        class="ps-product__price">$488.23</span>
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
                                                <div class="ps-product__value">$488.23</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="ps-product ps-product--wishlist">
                                        <div class="ps-product__remove"><a href="#"><i class="icon-cross"></i></a>
                                        </div>
                                        <div class="ps-product__thumbnail"><a class="ps-product__image"
                                                href="product1.html">
                                                <figure><img src="{{ asset('frontend/img/products/001.jpg') }}"
                                                        alt="alt"><img
                                                        src="{{ asset('frontend/img/products/001.jpg') }}"
                                                        alt="alt">
                                                </figure>
                                            </a></div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="product1.html">Hill-Rom Affinity III
                                                    Progressa iBed</a></h5>
                                            <div class="ps-product__row">
                                                <div class="ps-product__label">Price:</div>
                                                <div class="ps-product__value"><span
                                                        class="ps-product__price">$436.87</span>
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
                                                <div class="ps-product__value">$436.87</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="ps-wishlist__table">
                                <table class="table ps-table ps-table--product mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="5%">
                                                Sl
                                            </th>
                                            <th width="">Image</th>
                                            <th width="">Product Name</th>
                                            <th width="">Unit price</th>
                                            <th width="">Stock status</th>
                                            <th width="">Add Cart</th>
                                            <th width="5%">
                                                <i class="fa fa-trash" title="delete quick order"></i>
                                            </th>
                                        </tr>
                                        <table class="table ps-table ps-table--product mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td class=""><a class="ps-product__image"
                                                            href="product1.html">
                                                            <figure><img
                                                                    src="{{ asset('frontend/img/products/003.jpg') }}"
                                                                    alt="">
                                                            </figure>
                                                        </a></td>
                                                    <td class=""> <a href="product1.html">Somersung Sonic
                                                            X2500
                                                            Pro White</a></td>
                                                    <td class=""> <span class="ps-product__price">$399.99</span>
                                                    </td>
                                                    <td class="ps-product__status"> <span>In Stock</span>
                                                    </td>
                                                    <td class="ps-product__cart">
                                                        <button class="ps-btn">Cart</button>
                                                    </td>
                                                    <td class="">
                                                        <a href="#"><i class="icon-cross"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td class=""><a class="ps-product__image"
                                                            href="product1.html">
                                                            <figure><img
                                                                    src="{{ asset('frontend/img/products/003.jpg') }}"
                                                                    alt="">
                                                            </figure>
                                                        </a></td>
                                                    <td class=""> <a href="product1.html">Somersung Sonic
                                                            X2500
                                                            Pro White</a></td>
                                                    <td class=""> <span class="ps-product__price">$399.99</span>
                                                    </td>
                                                    <td class="ps-product__status"> <span>In Stock</span>
                                                    </td>
                                                    <td class="ps-product__cart">
                                                        <button class="ps-btn">Cart</button>
                                                    </td>
                                                    <td class="">
                                                        <a href="#"><i class="icon-cross"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                            <div class="ps-wishlist__share">
                                <label>Share on:</label>
                                <ul class="ps-social ps-social--color">
                                    <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook">
                                            </i><span class="ps-tooltip">Facebook</span></a></li>
                                    <li><a class="ps-social__link twitter" href="#"><i
                                                class="fa fa-twitter"></i><span class="ps-tooltip">Twitter</span></a>
                                    </li>
                                    <li><a class="ps-social__link pinterest" href="#"><i
                                                class="fa fa-pinterest-p"></i><span
                                                class="ps-tooltip">Pinterest</span></a></li>
                                    <li class="ps-social__linkedin"><a class="ps-social__link linkedin"
                                            href="#"><i class="fa fa-linkedin"></i><span
                                                class="ps-tooltip">Linkedin</span></a></li>
                                    <li class="ps-social__reddit"><a class="ps-social__link reddit-alien"
                                            href="#"><i class="fa fa-reddit-alien"></i><span
                                                class="ps-tooltip">Reddit Alien</span></a></li>
                                    <li class="ps-social__email"><a class="ps-social__link envelope"
                                            href="#"><i class="fa fa-envelope-o"></i><span
                                                class="ps-tooltip">Email</span></a></li>
                                    <li class="ps-social__whatsapp"><a class="ps-social__link whatsapp"
                                            href="#"><i class="fa fa-whatsapp"></i><span
                                                class="ps-tooltip">WhatsApp</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
