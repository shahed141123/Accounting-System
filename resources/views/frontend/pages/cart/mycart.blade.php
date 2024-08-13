<x-frontend-app-layout :title="'My Cart'">
    <div class="ps-shopping">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    Shopping cart
                </li>
            </ul>
            <h3 class="ps-shopping__title">Shopping cart<sup>(co)</sup></h3>
            <div class="ps-shopping__content">
                <div class="row cartTable">
                    @include('frontend.pages.cart.partials.cartTable')
                </div>
                <section class="ps-section--latest">
                    <div class="container">
                        <h3 class="ps-section__title">You may be interested in…</h3>
                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                                data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                                data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5"
                                data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image" href="product-details.html">
                                                <figure>
                                                    <img src="img/products/medicine1.jpg" alt="alt" /><img
                                                        src="img/products/medicine3.jpg" alt="alt" />
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Quick view">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#popupQuickview"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart">
                                                    <a href="#" data-toggle="modal" data-target="#popupAddcart"><i
                                                            class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--sale">Sale</div>
                                            </div>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title">
                                                <a href="product-details.html">3-layer mask with an elastic band (1
                                                    piece)</a>
                                            </h5>
                                            <div class="ps-product__meta">
                                                <span class="ps-product__price sale">£9.99</span><span
                                                    class="ps-product__del">$38.24</span>
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
                                                        <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="icon-minus"></i>
                                                        </button>
                                                        <input class="quantity" min="0" name="quantity"
                                                            value="1" type="number" />
                                                        <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="ps-product__cart">
                                                    <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                                        data-target="#popupAddcart">Add to
                                                        cart</a>
                                                </div>
                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                    data-placement="left" title="Add to cart">
                                                    <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                                <div class="ps-product__item" data-toggle="tooltip"
                                                    data-placement="left" title="Wishlist">
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="ps-product__item rotate" data-toggle="tooltip"
                                                    data-placement="left" title="Add to compare">
                                                    <a href="compare.html"><i class="fa fa-align-left"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.remove-from-cart').click(function(e) {
                    e.preventDefault(); // Prevent default link behavior

                    var button = $(this);
                    var rowId = button.data('cart-item-id'); // Get the cart item ID
                    var cartHeader = $('.miniCart');

                    // Confirm removal
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: '/cart/remove', // The route to handle item removal
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    rowId: rowId
                                },
                                success: function(response) {
                                    // Remove the cart item from the list
                                    $(".cartCount").html(data.cartCount);
                                    cartHeader.html(data.cartHeader);
                                    $(".cartCount").html(data.cartCount);
                                    Swal.fire(
                                        'Deleted!',
                                        'Your item has been removed.',
                                        'success'
                                    );
                                },
                                error: function(xhr) {
                                    console.error(xhr.responseText);
                                    Swal.fire(
                                        'Oops...',
                                        'Something went wrong!',
                                        'error'
                                    );
                                }
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
