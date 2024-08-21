<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @props(['title'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="https://i.ibb.co/52jNg3v/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>PiqPaq | Go Green, Live Clean!</title>
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/noUiSlider/nouislider.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home-14.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .swal2-popup {
            font-size: 1.3rem !important;
            padding: 1.5rem;
        }

        .swal2-confirm {
            margin-right: 1rem;
        }

        .swal2-actions {
            margin-bottom: 1.25rem;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="loading-percentage" id="loadingPercentage">0%</div>
        </div>
    </div> --}}

    <div class="ps-page">
        {{-- Header --}}
        @include('frontend.layouts.header')
        {{-- Header --}}
        {{ $slot }}
        {{-- Footer --}}
        @include('frontend.layouts.footer')
        {{-- Footer --}}
    </div>
    @include('frontend.layouts.extra')

    <script src="{{ asset('frontend/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/lightGallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/noUiSlider/nouislider.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/sidebar.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    @stack('scripts')
    <!-- custom code-->
    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        // Simulate loading progress
        let percentage = 0;

        function updateLoadingProgress() {
            percentage += 1;
            $('#loadingPercentage').text(percentage + '%');
            if (percentage < 100) {
                setTimeout(updateLoadingProgress, 100); // Update every 100ms
            }
        }
        updateLoadingProgress();
    </script>
    <script>
        class Dashboard {
            constructor() {
                this.initDataTables();
            }
            initDataTables() {
                $(document).ready(() => {
                    // Initialize DataTable for elements with class 'order-history-table'
                    $('.order-history-table').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                        "language": {
                            "paginate": {
                                "previous": "<i class='fa fa-chevron-left pagination-icon'></i>",
                                "next": "<i class='fa fa-chevron-right pagination-icon'></i>"
                            }
                        }
                    });
                });
            }
        }
        // Create an instance of the Dashboard class
        $(document).ready(() => {
            new Dashboard();
        });
    </script>

    {{-- add_to_cart_btn_product_single --}}
    <script>
        $(document).ready(function() {
            $('.add_to_cart_btn_product_single').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link

                // Find the quantity input
                var $quantityInput = $(this).closest('.ps-product__feature').find('.quantity');
                var product_id = $(this).data('product_id');
                var cartHeader = $('.miniCart');
                var qty = $quantityInput.val(); // Get the quantity value

                // Check if quantity is valid
                if (qty <= 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Quantity',
                        text: 'Please select a valid quantity.'
                    });
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: '/cart/store/' + product_id,
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token for security
                        quantity: qty
                    },
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            showConfirmButton: false,
                            timer: 3000
                        });
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });

                            // Update mini cart
                            cartHeader.html(data.cartHeader);
                            $(".cartCount").html(data.cartCount);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'An unexpected error occurred.';

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMessage = xhr.responseJSON.error;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.error) {
                                    errorMessage = response.error;
                                }
                            } catch (e) {
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.add_to_cart').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link
                var button = $(this);
                var product_id = button.data('product_id');
                var qty = button.data('product_qty'); // Get the quantity value
                var cartUrl = $(this).attr('href');
                var cartHeader = $('.miniCart');

                // Check if quantity is valid
                if (qty <= 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Quantity',
                        text: 'Please select a valid quantity.'
                    });
                    return;
                }

                $.ajax({
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token for security
                        quantity: qty
                    },
                    url: cartUrl,
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if (data.success) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            button.prop('disabled', true); // Disable the button
                            button.text('Already added'); // Change button text
                            $(".cartCount").html(data.cartCount);
                            cartHeader.html(data.cartHeader);
                        } else if (data.error) {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'An unexpected error occurred.';

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMessage = xhr.responseJSON.error;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.error) {
                                    errorMessage = response.error;
                                }
                            } catch (e) {
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.add_to_cartPage').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link
                var button = $(this);
                var product_id = button.data('product_id');
                var qty = button.data('product_qty'); // Get the quantity value
                var cartUrl = $(this).attr('href');
                var cartHeader = $('.miniCart');

                // Check if quantity is valid
                if (qty <= 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Quantity',
                        text: 'Please select a valid quantity.'
                    });
                    return;
                }

                $.ajax({
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token for security
                        quantity: qty
                    },
                    url: cartUrl,
                    dataType: 'json',
                    success: function(data) {
                        Swal.fire(
                            'Added To Cart!',
                            data.success,
                            'success'
                        ).then(function() {
                            location.reload(); // Reload the page to reflect changes
                        });
                    },
                    error: function(xhr) {
                        console.log('AJAX Error Response:', xhr
                            .responseText); // Log full response for debugging
                        let errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr
                            .responseJSON.error : 'An unexpected error occurred.';
                        Swal.fire(
                            'Oops...',
                            errorMessage,
                            'error'
                        );
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.add_to_wishlist').click(function(e) {
                e.preventDefault(); // Prevent the default action of the link
                var button = $(this);
                var product_id = button.data('product_id');
                var user_id = button.data('product_id');
                var wishlistUrl = $(this).attr('href');
                var wishlistCount = $('.wishlistCount');
                // Check if quantity is valid


                $.ajax({
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    url: wishlistUrl,
                    dataType: 'json',
                    success: function(data) {
                        const Toast = Swal.mixin({
                            showConfirmButton: false,
                            timer: 3000
                        });
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            });
                            button.prop('disabled', true); // Disable the button
                            // button.text('Already added'); // Change button text
                            wishlistCount.html(data.wishlistCount);
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = xhr.responseJSON.message; // Default message

                        // Check if the response is JSON and contains an error message
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseText) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMessage = response.message;
                                }
                            } catch (e) {
                                // If responseText is not JSON, use default message
                                console.error('Error parsing response text:', e);
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorMessage
                        });
                    }
                });
            });
        });
    </script>

    {{-- MiNiCart  --}}

    <script>
        function miniCart() {

            $.ajax({

                type: 'GET',
                dataType: 'json',
                url: '/product/mini/cart',

                success: function(response) {

                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartQty').text(response.cartQty);

                    var miniCart = ""

                    $.each(response.carts, function(key, value) {

                        miniCart += `<ul id="minicartHeader" class="product_list_widget list-unstyled">

                            <li>
                                <div class="media clearfix">

                                    <div class="media-lefta">
                                        <a href="single-product.html">
                                            <img src="/${value.options.image}" style="width:50px;height:50px;" alt="hoodie_5_front" />
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <a href="">${value.name}</a>

                                        <span class="price">
                                            <span class="amount">
                                                Tk ${value.price}
                                            </span>
                                        </span>

                                        <span class="quantity">Qty: ${value.qty} Pcs</span>

                                    </div>

                                </div>
                                <div class="product-remove">

                                    <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" class="btn-remove" title="Remove this item">
                                        <i class="fa fa-close"></i>
                                    </a>

                                </div>
                            </li>

                            </ul>`

                    });

                    $('#miniCart').html(miniCart);

                }

            })

        }

        miniCart();
    </script>

    {{-- //MiNiCart Remove  --}}

    {{-- Search Script --}}
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var searchContainer = $('#search_container');
            var path = "{{ route('global.search') }}";
            var searchInput = $('#search_text');

            searchInput.autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: path,
                        type: "POST",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            if (data.length > 0) {
                                if (searchContainer.hasClass('d-none')) {
                                    searchContainer.removeClass('d-none');
                                }
                                searchContainer.html(data);
                            } else {
                                searchContainer.addClass('d-none');
                            }
                        }
                    });
                },
                minLength: 1
            });

            searchInput.on('input', function() {
                if (searchInput.val() === '') {
                    searchContainer.addClass('d-none');
                }
            });

            searchInput.on('keydown', function(event) {
                if (event.keyCode === 8 && searchInput.val() === '') {
                    searchContainer.addClass('d-none');
                }
            });
        });
    </script>

    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();

            var deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-success'
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then(function() {
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            Swal.fire(
                                'Error Occurred!',
                                error,
                                'error'
                            );
                        }
                    });
                } else if (result.dismiss === swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    );
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#update-cart').click(function() {
                var cartItems = [];

                // Collect all quantities and row IDs
                $('.quantity').each(function() {
                    var rowId = $(this).data(
                        'row_id'); // Use data-row_id as specified in your Blade file
                    var qty = $(this).val();

                    // Ensure rowId and qty are valid
                    if (rowId && !isNaN(qty) && qty >= 0) {
                        cartItems.push({
                            rowId: rowId,
                            qty: parseInt(qty, 10) // Ensure qty is an integer
                        });
                    }
                });

                // Send the updated quantities to the server
                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        items: cartItems
                    },
                    success: function(data) {
                        Swal.fire(
                            'Updated!',
                            data.success,
                            'success'
                        ).then(function() {
                            location.reload(); // Reload the page to reflect changes
                        });
                    },
                    error: function(xhr) {
                        console.log('AJAX Error Response:', xhr
                            .responseText); // Log full response for debugging
                        let errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr
                            .responseJSON.error : 'An unexpected error occurred.';
                        Swal.fire(
                            'Oops...',
                            errorMessage,
                            'error'
                        );
                    }
                });
            });
        });
    </script>
    {{-- add_to_cart_btn_product_single --}}
</body>


</html>
