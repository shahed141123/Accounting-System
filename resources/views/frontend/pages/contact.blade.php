<x-frontend-app-layout :title="'Contact Us'">
    <div class="ps-contact">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    Contact us
                </li>
            </ul>
            <div class="ps-contact__content">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="ps-contact__info">
                            <h2 class="ps-contact__title">How can we help you?</h2>
                            <p class="ps-contact__text">
                                We are at your disposal 7 days a week!
                            </p>
                            <h3 class="ps-contact__fax">0020 500 – MYMEDI – 000</h3>
                            <div class="ps-contact__work">
                                Monday – Friday: 9:00-20:00<br />Saturday: 11:00 – 15:00
                            </div>
                            <div class="ps-contact__email">
                                {{-- <a
                                    href="http://nouthemes.net/cdn-cgi/l/email-protection#dbb8b4b5afbab8af9bbea3bab6abb7bef5b8b4b6"><span
                                        class="__cf_email__"
                                        data-cfemail="43202c2d3722203703263b222e332f266d202c2e">[email&#160;protected]</span></a> --}}
                            </div>
                            <ul class="ps-social">
                                <li>
                                    <a class="ps-social__link facebook" href="#"><i class="fa fa-facebook">
                                        </i><span class="ps-tooltip">Facebook</span></a>
                                </li>
                                <li>
                                    <a class="ps-social__link instagram" href="#"><i
                                            class="fa fa-instagram"></i><span class="ps-tooltip">Instagram</span></a>
                                </li>
                                <li>
                                    <a class="ps-social__link youtube" href="#"><i
                                            class="fa fa-youtube-play"></i><span class="ps-tooltip">Youtube</span></a>
                                </li>
                                <li>
                                    <a class="ps-social__link pinterest" href="#"><i
                                            class="fa fa-pinterest-p"></i><span class="ps-tooltip">Pinterest</span></a>
                                </li>
                                <li>
                                    <a class="ps-social__link linkedin" href="#"><i
                                            class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="ps-contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.822845645748!2d-97.1301607845029!3d32.770434891627616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7dcf27b929d9%3A0xc63407d6f47753b9!2s1487%20Rocky%20Canyon%20Rd%2C%20Arlington%2C%20TX%2076012%2C%20USA!5e0!3m2!1sen!2s!4v1616124426616!5m2!1sen!2s"
                                width="600" height="450" style="border: 0" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.add') }}" method="post">
                @csrf
                <div class="ps-form--contact">
                    <h2 class="ps-form__title">
                        Fill up the form if you have any question
                    </h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="text" name="name"
                                    placeholder="Name and Surname" />
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="email" name="email"
                                    placeholder="Your E-mail" />
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="text" name="phone"
                                    placeholder="Phone" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ps-form__group">
                                <textarea class="form-control ps-form__textarea" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__submit">
                        <button type="submit" class="ps-btn ps-btn--warning">Send message</button>
                    </div>
                </div>
            </form>
            <section class="ps-section--instagram">
                <h3 class="ps-section__title">
                    Follow <strong>@PiqPaq </strong>on instagram
                </h3>
                <div class="ps-section__content">
                    <div class="row m-0">
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7FC7pwae/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram1.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7D5zJqwo/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram2.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7BnapGmv/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram3.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7Af8JWDj/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram4.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf6_QEpWYv/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram5.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/p/CDf69FupFee/">
                                <img src="{{ asset('frontend') }}/img/instagram/instagram6.jpg" alt /><span
                                    class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-frontend-app-layout>
