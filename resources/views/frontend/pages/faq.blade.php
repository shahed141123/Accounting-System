<x-frontend-app-layout :title="'Contact Us'">
    <style>
        .accordion .card-header:after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
            color: white;
            border: 1px solid white;
            border-radius: 100%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 1.9;
            cursor: pointer;
        }

        .accordion .card-header.collapsed:after {
            content: "\f067";
            color: white;
            border: 1px solid white;
            border-radius: 100%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 1.9;
            cursor: pointer;
        }
    </style>
    <div class="breadcrumb-wrap">
        <div class="banner b-top bg-size bread-img">
            <img class="bg-img bg-top" src="img/banner-p.jpg" alt="banner" style="display: none;">
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="title-box3 text-center">
                        <h1>
                            Faq
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <ul class="ps-breadcrumb ">
            <li class="ps-breadcrumb__item"><a href="/">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page">Faq</li>
        </ul>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div>
                    <h1 class="text-start mb-5 display-4">Piqpaq <br> Frequently Asked Questions (FAQ)</h1>
                    <p>Find answers to all your questions about shopping at Piqpaq. Our FAQ section covers everything
                        from ordering and shipping to returns and refunds, ensuring a smooth and satisfying shopping
                        experience.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img class="img-fluid" src="{{ asset('frontend/img/faq.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div id="accordion" class="accordion pb-5">
            <div class="card mb-0 border-0">
                <div id="accordion">
                    <!-- FAQ Item 1 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseOne">
                            <a class="card-title text-white">
                                Q: How do I place an order?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Placing an order is simple. Browse our products, select the items you want, add them to
                                your cart, and proceed to checkout. You'll need to provide your shipping details and
                                payment information to complete your purchase.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo">
                            <a class="card-title text-white">
                                Q: Can I cancel or change my order after it's been placed?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                If your order has not yet been processed, you can cancel or modify it by contacting our
                                customer service team at <a
                                    href="mailto:support@neezonline.com">support@neezonline.com</a>. Once the order has
                                been processed, changes or cancellations may not be possible.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree">
                            <a class="card-title text-white">
                                Q: How long does shipping take?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Shipping times vary depending on your location and the shipping method you select at
                                checkout. Typically, orders are delivered within 3-7 business days. You can track your
                                order through the tracking link provided in your shipping confirmation email.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFour">
                            <a class="card-title text-white">
                                Q: What is your return policy?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                We accept returns within 30 days of purchase, provided the item is unused and in its
                                original packaging. To initiate a return, please contact our customer service team.
                                Refunds will be processed once the item is received and inspected.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFive">
                            <a class="card-title text-white">
                                Q: How can I contact customer support?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                You can reach our customer support team by email at <a
                                    href="mailto:support@neezonline.com">support@neezonline.com</a> or through our
                                online contact form. We're here to assist you with any questions or concerns.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseSix">
                            <a class="card-title text-white">
                                Q: Do you ship internationally?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Yes, we offer international shipping to select countries. Shipping fees and delivery
                                times will vary based on the destination. Please check our shipping policy for more
                                details.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseSeven">
                            <a class="card-title text-white">
                                Q: What payment methods do you accept?
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                We accept a variety of payment methods, including credit/debit cards (Visa, MasterCard,
                                American Express), PayPal, and other secure payment gateways.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse"
                            data-parent="#accordion" href="#collapseEight">
                            <a class="card-title text-white">
                                Q: Is my payment information secure?
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Yes, we take your security seriously. All transactions are encrypted and processed
                                through secure payment gateways to protect your personal and financial information.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 9 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse"
                            data-parent="#accordion" href="#collapseNine">
                            <a class="card-title text-white">
                                Q: How do I reset my password?
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                If you've forgotten your password, click on the "Forgot Password" link on the login
                                page. Enter your registered email address, and we'll send you instructions on how to
                                reset your password.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="card">
                        <div class="card-header collapsed bg-info p-4" data-toggle="collapse"
                            data-parent="#accordion" href="#collapseTen">
                            <a class="card-title text-white">
                                Q: Do I need an account to place an order?
                            </a>
                        </div>
                        <div id="collapseTen" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                No, you can place an order as a guest. However, creating an account allows you to track
                                orders, save your shipping details, and enjoy a faster checkout experience in the
                                future.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
