<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            /* Slightly transparent white background */
            z-index: 9999;
            /* Ensure it's on top of all content */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preloader-inner {
            text-align: center;
        }

        .spinner {
            border: 8px solid #f3f3f3;
            /* Light grey background */
            border-top: 8px solid #3498db;
            /* Blue spinner */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-percentage {
            font-size: 1.5rem;
            color: #3498db;
            /* Blue color for percentage text */
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="loading-percentage" id="loadingPercentage">0%</div>
        </div>
    </div>

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
    <script src="{{ asset('frontend/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/lightGallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/noUiSlider/nouislider.min.js') }}"></script>
    <!-- jQuery (required for DataTables and Date Range Picker) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Date Range Picker JS -->
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- DataTables JS -->
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
                this.initDateRangePicker();
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

            initDateRangePicker() {
                $(document).ready(() => {
                    // Initialize Date Range Picker
                    $('#kt_daterangepicker_1').daterangepicker({
                        opens: 'left',
                        locale: {
                            format: 'MM/DD/YYYY'
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
</body>


</html>
