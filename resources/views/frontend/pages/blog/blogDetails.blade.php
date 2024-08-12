<x-frontend-app-layout :title="'Blog Details'">
    <div class="ps-post ps-post--sidebar">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">Higiene</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">{{ $blog->title }}</li>
            </ul>
            <div class="ps-post__content">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span class="ps-badge__item">PHARMACY</span><span class="ps-badge__item">SALE</span></div>
                        <h1 class="ps-post__title">{{ $blog->title }}</h1>
                        <div class="ps-blog__meta"> <span class="ps-blog__date">{{ $blog->created_at->format("M d Y") }}</span>
                            <a class="ps-blog__author" href="#">{{ $blog->author }}</a></div>
                        <div class="ps-blog__banner"> <img src="img/blog/blog13-992x525.jpg" alt=""></div>
                        <p class="ps-blog__text-large">{!! $blog->header  !!}</p>
                        <p class="ps-blog__text">{!! $blog->short_description  !!}</p>
                        <p class="ps-blog__text">{!! $blog->long_description  !!}</p>

                        <p class="ps-blog__text">{!! $blog->footer  !!}</p>
                        <div class="ps-comment--post">
                            <h2 class="ps-comment__title">Comments (6)</h2>
                            <ul class="ps-comment__list">
                                {{-- <li>
                                    <div class="ps-review--product">
                                        <div class="ps-review__row">
                                            <div class="ps-review__avatar"><img src="img/avatar/avatar-review3.html" alt="alt" /></div>
                                            <div class="ps-review__info">
                                                <div class="ps-review__name">Jenna S.</div>
                                                <div class="ps-review__date">Aug 12, 2021</div>
                                            </div>
                                            <div class="ps-review__desc">
                                                <p>Everything is perfect. I would recommend!</p><a class="ps-review__reply" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}

                            </ul>
                        </div>
                        <div class="ps-form--review">
                            <div class="ps-form__title">Write a comment</div>
                            <div class="ps-form__desc">Your email address will not be published. All fields are required</div>
                            <form action="http://nouthemes.net/html/mymedi/do_action" method="post">
                                <div class="row">
                                    <div class="col-6 col-md-6">
                                        <label class="ps-form__label">Your name</label>
                                        <input class="form-control ps-form__input" placeholder="Your name">
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class="ps-form__label">Your e-mail</label>
                                        <input class="form-control ps-form__input" placeholder="Your e-mail">
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-form__block">
                                            <label class="ps-form__label">Your comment</label>
                                            <textarea class="form-control ps-form__textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn ps-btn ps-btn--warning">Add Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--blog">
                            <div class="ps-product--extension">
                                <div class="ps-product__delivery">
                                    <div class="ps-delivery__item"><i class="icon-wallet"></i>100% Money back</div>
                                    <div class="ps-delivery__item"><i class="icon-bag2"></i>Non-contact  shipping</div>
                                    <div class="ps-delivery__item"><i class="icon-refresh"></i>Minimum Order Quantity Over £500</div>
                                    <div class="ps-delivery__item"><i class="icon-truck"></i>Free delivery for order over £500</div>
                                </div>
                                <div class="ps-product__payment"> <img src="img/payment-product.png" alt></div>
                                <div class="ps-product__gif">
                                    <div class="ps-gif__text"><i class="icon-shield-check"></i><strong>100% Secure delivery </strong>without contacting the courier</div><img class="ps-gif__thumbnail" src="img/blue-white-ribbon-on-pink-box.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-section--blog" data-background="img/related-bg.jpg">
            <div class="container">
                <h3 class="ps-section__title">Related Posts</h3>
                <div class="ps-section__carousel">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-section__item">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="blog-details.html"><img src="img/blog/blog2-496x262.jpg" alt="alt" /></a>
                                    <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span class="ps-badge__item">PHARMACY</span><span class="ps-badge__item">SALE</span>
                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">May 18, 2021</span><a class="ps-blog__author" href="#">Alfredo Austin</a></div><a class="ps-blog__title" href="blog-details.html">[PDF REPORT] – Impact of wearing masks on social behavior</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__item">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="blog-details.html"><img src="img/blog/blog11-496x262.jpg" alt="alt" /></a>
                                    <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span class="ps-badge__item">PHARMACY</span><span class="ps-badge__item">SALE</span>
                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">May 18, 2021</span><a class="ps-blog__author" href="#">Alfredo Austin</a></div><a class="ps-blog__title" href="blog-details.html">The latest tests of popular masks in accordance with CV2s standards</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__item">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="blog-details.html"><img src="img/blog/blog13-496x262.jpg" alt="alt" /></a>
                                    <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span class="ps-badge__item">PHARMACY</span><span class="ps-badge__item">SALE</span>
                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">May 18, 2021</span><a class="ps-blog__author" href="#">Alfredo Austin</a></div><a class="ps-blog__title" href="blog-details.html">The latest tests of popular masks in accordance with CV2s standards</a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__item">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail"><a href="blog-details.html"><img src="img/blog/blog12-496x262.jpg" alt="alt" /></a>
                                    <div class="ps-blog__badge"><span class="ps-badge__item">MEDIC</span><span class="ps-badge__item">PHARMACY</span><span class="ps-badge__item">SALE</span>
                                    </div>
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta"> <span class="ps-blog__date">May 18, 2021</span><a class="ps-blog__author" href="#">Alfredo Austin</a></div><a class="ps-blog__title" href="blog-details.html">New special offer for customers who have been with us for 10 years</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-frontend-app-layout>
