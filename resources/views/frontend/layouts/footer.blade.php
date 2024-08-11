<style>
    .ps-footer {
        position: relative;
        width: 100%;
        min-height: 300px;
        /* Adjust as needed */
        background-image: url('{{ asset('frontend/img/footer_bg.jpg') }}');
        background-size: containe;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        /* Sets text color to white for contrast */
    }

    .ps-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #f5f5f5c2;
        /* White overlay with 91% opacity */
        z-index: 1;
    }

    .ps-footer .container {
        position: relative;
        z-index: 2;
    }

    .ps-footer__link,
    .ps-footer__title,
    .ps-footer__email,
    .ps-block__list a {
        color: #fff;
    }

    .ps-footer__link:hover,
    .ps-block__list a:hover {
        color: #ff0;
    }

    .ps-social__link {
        color: #fff;
    }

    .ps-social__link:hover {
        color: #ff0;
    }

    .ps-footer--bottom img {
        filter: brightness(0) invert(1);
    }
</style>
<footer class="ps-footer ps-footer--13 ps-footer--14">
    <div class="ps-footer--top">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center"><a class="ps-footer__link" href="#"><i class="icon-wallet"></i>100% Money
                            back</a></p>
                </div>
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center"><a class="ps-footer__link" href="#"><i
                                class="icon-bag2"></i>Non-contact shipping</a></p>
                </div>
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center"><a class="ps-footer__link" href="#"><i class="icon-truck"></i>Free
                            delivery for order over £500</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ps-footer__middle">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-footer--address">
                                <div class="ps-logo"><a href="index.html"> <img src="img/logo.png" alt><img
                                            class="logo-white" src="img/logo.png" alt><img class="logo-black"
                                            src="img/logo.png" alt><img class="logo-white-all" src="img/logo.png"
                                            alt><img class="logo-green" src="img/logo.png" alt></a></div>
                                <div class="ps-footer__title">Our store</div>
                                <p>1487 Rocky Horse Carrefour<br>Arlington, TX 16819</p>
                                <ul class="ps-social">
                                    <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook">
                                            </i><span class="ps-tooltip">Facebook</span></a></li>
                                    <li><a class="ps-social__link instagram" href="#"><i
                                                class="fa fa-instagram"></i><span
                                                class="ps-tooltip">Instagram</span></a></li>
                                    <li><a class="ps-social__link youtube" href="#"><i
                                                class="fa fa-youtube-play"></i><span
                                                class="ps-tooltip">Youtube</span></a></li>
                                    <li><a class="ps-social__link pinterest" href="#"><i
                                                class="fa fa-pinterest-p"></i><span
                                                class="ps-tooltip">Pinterest</span></a></li>
                                    <li><a class="ps-social__link linkedin" href="#"><i
                                                class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="ps-footer--contact">
                                <h5 class="ps-footer__title">Need help</h5>
                                <div class="ps-footer__fax"><i class="icon-telephone"></i>0020 500 – 4546 – 000</div>
                                <p class="ps-footer__work">Monday – Friday: 9:00-20:00<br>Saturday: 11:00 – 15:00</p>
                                <hr>
                                <p><a class="ps-footer__email" href="#"> <i class="icon-envelope"></i><span
                                            class="__cf_email__" data-cfemail="">info@piqpaq.com</span> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">General</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about-us') }}">About us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    <li><a href="{{ route('allBlog') }}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">Account</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ route('user.account.details') }}">My Account</a></li>
                                    <li><a href="{{ route('user.order.history') }}">My Orders</a></li>
                                    <li><a href="{{ route('user.quick.order') }}">Quick Order</a></li>
                                    <li><a href="{{ route('user.wishlist') }}">Shopping List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">Policy</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ asset('return-policy') }}">Returns</a></li>
                                    <li><a href="{{ asset('privacy/policy') }}">Privacy & Policy</a></li>
                                    <li><a href="{{ asset('terms-condition') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ asset('faq') }}">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-footer--bottom">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>Copyright © 2024 PiqPaq. All Rights Reserved</p>
                </div>
                <div class="col-12 col-md-6 text-right"><img src="img/payment.png" alt><img class="payment-light"
                        src="img/payment-light.png" alt></div>
            </div>
        </div>
    </div>
</footer>
