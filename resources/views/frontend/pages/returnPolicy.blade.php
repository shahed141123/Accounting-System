<x-frontend-app-layout :title="'Return Policy'">
    <div class="breadcrumb-wrap">
        <div class="banner b-top bg-size bread-img">
            <img class="bg-img bg-top" src="img/banner-p.jpg" alt="banner" style="display: none;">
            <div class="container-lg">
                <div class="breadcrumb-box">
                    <div class="title-box3 text-center">
                        <h1>
                            Return Policy
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="ps-breadcrumb ">
            <li class="ps-breadcrumb__item"><a href="/">Home</a></li>
            <li class="ps-breadcrumb__item active" aria-current="page">Return</li>
        </ul>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="text-start mb-5 display-4">PiqPaq</h1>
                <p class="lead">Last updated: August 11, 2024</p>
                <p class="mb-5">Thank you for shopping at PiqPaq. We strive to ensure that our customers are fully
                    satisfied with their purchases. However, if you are not entirely satisfied with your purchase, we're
                    here to
                    help.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="text-start mb-5 display-4">Returns</h1>
                <p class="mb-5">You have 30 calendar days to return an item from the date you received it. To be
                    eligible for
                    a
                    return, your item must be unused and in the same condition that you received it. Your item must be
                    in the
                    original packaging and must have the receipt or proof of purchase.</p>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('frontend/img/reutrn.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="text-start mb-5 display-4">Refunds</h1>
                <p class="mb-5">Once we receive your item, we will inspect it and notify you that we have received
                    your
                    returned item. We will immediately notify you of the status of your refund after inspecting the
                    item.</p>
                <p class="mb-5">If your return is approved, we will initiate a refund to your credit card (or original
                    method
                    of payment). You will receive the credit within a certain number of days, depending on your card
                    issuer's
                    policies.</p>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('frontend/img/refund.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <h1 class="text-start mb-5 display-4">Shipping</h1>
                <p class="mb-5">You will be responsible for paying for your own shipping costs for returning your
                    item.
                    Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be
                    deducted
                    from your refund.</p>
            </div>
            <div class="col-lg-12">
                <h1 class="text-start mb-5 display-4">Contact Us</h1>
                <p class="mb-5">If you have any questions on how to return your item to us, contact us at <a
                        href="mailto:support@piqpaq.com">support@piqpaq.com</a>.</p>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
