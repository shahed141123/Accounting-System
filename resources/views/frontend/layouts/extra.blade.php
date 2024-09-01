<div class="ps-navigation--footer">
    <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#"
            id="close-menu"><i class="icon-cross"></i></a></div>
    <div class="ps-nav__item"><a href="{{ route('home') }}"><i class="icon-home2"></i></a></div>
    <div class="ps-nav__item"><a href="{{ route('login') }}"><i class="icon-user"></i></a></div>
    <div class="ps-nav__item"><a href="{{ route('user.wishlist') }}"><i class="fa fa-heart-o"></i><span
                class="badge">3</span></a>
    </div>
    <div class="ps-nav__item"><a href="{{ route('cart') }}"><i class="icon-cart-empty"></i><span
                class="badge">2</span></a></div>
</div>
<div class="ps-menu--slidebar">
    <div class="ps-menu__content">
        <ul class="menu--mobile">
            @foreach ($categories as $category)
                <li class="has-mega-menu"><a href="{{ route('category.products', $category->slug) }}">
                        {{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="ps-menu__footer">
        <div class="ps-menu__item">
            <div class="ps-menu__contact">Need help? <strong>0020 500 - MYMEDI - 000</strong></div>
        </div>
    </div>
</div>
<button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
