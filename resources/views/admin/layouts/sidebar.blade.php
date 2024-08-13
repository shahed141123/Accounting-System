<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo"
                src="{{ !empty($site->site_logo_white) && file_exists(public_path('storage/settings/' . $site->site_logo_white)) ? asset('storage/settings/' . $site->site_logo_white) : 'https://i.ibb.co/0cJBJJ8/logo-white.png' }}"
                class="h-50px logo w-150px">
            {{-- <img alt="Logo" src="https://i.ibb.co/MfYCzZB/logo.png" class="h-50px logo w-150px"> --}}
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-dark aside-toggle active"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor"></path>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0" style="height: 318px;">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0"
                                    viewBox="0 0 512 511" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path fill="#ed5176"
                                            d="M26.36 106.684v342.218a4.122 4.122 0 0 0 4.12 4.121h451.04a4.122 4.122 0 0 0 4.12-4.12v-342.22zm0 0"
                                            opacity="1" data-original="#ed5176" class=""></path>
                                        <g fill="#ba365f">
                                            <path
                                                d="M26.36 224.047h459.28v23.25H26.36zM26.36 106.684h459.28v23.25H26.36zm0 0"
                                                fill="#ba365f" opacity="1" data-original="#ba365f" class="">
                                            </path>
                                            <path
                                                d="M174.426 106.684v23.414c0 16.496 13.37 29.867 29.867 29.867h126.148c21.293 0 38.555-17.262 38.555-38.555v-14.726zM461.348 106.684v342.218a4.122 4.122 0 0 1-4.121 4.121h24.293a4.122 4.122 0 0 0 4.12-4.12v-342.22zm0 0"
                                                fill="#ba365f" opacity="1" data-original="#ba365f" class="">
                                            </path>
                                        </g>
                                        <path fill="#6a7193"
                                            d="M201.07 299.07v153.953h109.86V299.07c0-5.691-4.614-10.304-10.305-10.304h-89.254c-5.687 0-10.3 4.613-10.3 10.304zm0 0"
                                            opacity="1" data-original="#6a7193"></path>
                                        <path fill="#575b7a"
                                            d="M216.781 314.793c0-5.691 4.614-10.305 10.305-10.305h83.844v-5.418c0-5.691-4.614-10.304-10.301-10.304h-89.254c-5.691 0-10.305 4.613-10.305 10.304v153.953h15.711zm0 0"
                                            opacity="1" data-original="#575b7a" class=""></path>
                                        <path fill="#c8e7f7"
                                            d="M.64 177.871v42.055a4.12 4.12 0 0 0 4.122 4.12h502.476a4.12 4.12 0 0 0 4.121-4.12V177.87a4.12 4.12 0 0 0-4.12-4.121H4.761a4.12 4.12 0 0 0-4.121 4.121zm0 0"
                                            opacity="1" data-original="#c8e7f7" class=""></path>
                                        <path fill="#8cbcd6"
                                            d="M507.238 173.75H483.04a4.12 4.12 0 0 1 4.121 4.121v42.059a4.122 4.122 0 0 1-4.12 4.12h24.198a4.122 4.122 0 0 0 4.121-4.12V177.87a4.12 4.12 0 0 0-4.12-4.121zm0 0"
                                            opacity="1" data-original="#8cbcd6"></path>
                                        <path fill="#c8e7f7"
                                            d="M344.598 314.008v84.312a8.724 8.724 0 0 0 8.722 8.723h95.617a8.721 8.721 0 0 0 8.723-8.723v-84.312a8.719 8.719 0 0 0-8.723-8.723H353.32c-4.82-.004-8.722 3.903-8.722 8.723zM54.34 314.008v84.312a8.721 8.721 0 0 0 8.722 8.723h95.618a8.721 8.721 0 0 0 8.722-8.723v-84.312a8.721 8.721 0 0 0-8.722-8.723H63.062c-4.82-.004-8.722 3.903-8.722 8.723zM512 83.984V65.09H0v18.894c12.535 0 22.7 10.164 22.7 22.7h466.6c0-12.536 10.165-22.7 22.7-22.7zm0 0"
                                            opacity="1" data-original="#c8e7f7" class=""></path>
                                        <path fill="#8cbcd6"
                                            d="M174.426 65.09h194.57v41.594h-194.57zM487.8 65.09v18.894c-12.538 0-22.702 10.164-22.702 22.7H489.3c0-12.536 10.164-22.7 22.699-22.7V65.09zm0 0"
                                            opacity="1" data-original="#8cbcd6"></path>
                                        <path fill="#ffeb96"
                                            d="M158.715 30.367v84.305c0 16.492 13.37 29.867 29.867 29.867h134.836c16.492 0 29.867-13.375 29.867-29.867V30.367C353.285 13.871 339.91.5 323.418.5H188.582c-16.496 0-29.867 13.371-29.867 29.867zm0 0"
                                            opacity="1" data-original="#ffeb96"></path>
                                        <path fill="#252d4c"
                                            d="M226.125 378.395h-6.184c-4.14 0-7.5-3.36-7.5-7.5s3.36-7.5 7.5-7.5h6.184c4.145 0 7.5 3.359 7.5 7.5s-3.355 7.5-7.5 7.5zm0 0"
                                            opacity="1" data-original="#252d4c"></path>
                                        <path fill="#5692d8"
                                            d="M284.84 100.809h-45.883c-9.09 0-17.035-6.457-18.894-15.356l-9.754-46.617h-9.649a7.5 7.5 0 0 1-7.5-7.5 7.5 7.5 0 0 1 7.5-7.5h9.649c7.062 0 13.238 5.02 14.683 11.93l9.75 46.617a4.325 4.325 0 0 0 4.215 3.426h45.883a4.332 4.332 0 0 0 4.027-2.786l13.719-36.316h-60.828a7.5 7.5 0 1 1 0-15h64.887a12.2 12.2 0 0 1 10.03 5.262 12.183 12.183 0 0 1 1.376 11.242l-15.153 40.113c-2.82 7.465-10.078 12.485-18.058 12.485zM240.29 122.742h-2.06a7.497 7.497 0 0 1-7.5-7.5 7.5 7.5 0 0 1 7.5-7.5h2.06a7.5 7.5 0 0 1 7.5 7.5c0 4.145-3.356 7.5-7.5 7.5zM273.77 122.742h-2.06a7.497 7.497 0 0 1-7.5-7.5 7.5 7.5 0 0 1 7.5-7.5h2.06a7.5 7.5 0 0 1 7.5 7.5c0 4.145-3.356 7.5-7.5 7.5zm0 0"
                                            opacity="1" data-original="#5692d8"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                {{-- Site Content  --}}
                @php
                    $menuItems = [
                        [
                            'title' => 'Products',
                            'icon' => 'icons/duotune/ecommerce/ecm001.svg',
                            'routes' => [
                                'admin.brands.index',
                                'admin.brands.create',
                                'admin.brands.edit',
                                'admin.categories.index',
                                'admin.categories.create',
                                'admin.categories.edit',
                                'admin.stock-management.index',
                                'admin.shipping-management.index',
                                'admin.order-management.index',
                                'admin.product.index',
                                'admin.product.create',
                                'admin.product.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Manage Products',
                                    'routes' => ['admin.product.index', 'admin.product.create', 'admin.product.edit'],
                                    'route' => 'admin.product.index',
                                ],
                                [
                                    'title' => 'Brand List',
                                    'routes' => ['admin.brands.index', 'admin.brands.create', 'admin.brands.edit'],
                                    'route' => 'admin.brands.index',
                                ],
                                [
                                    'title' => 'Category List',
                                    'routes' => [
                                        'admin.categories.index',
                                        'admin.categories.create',
                                        'admin.categories.edit',
                                    ],
                                    'route' => 'admin.categories.index',
                                ],
                                [
                                    'title' => 'Stock Info',
                                    'routes' => ['admin.stock-management.index'],
                                    'route' => 'admin.stock-management.index',
                                ],
                                [
                                    'title' => 'Shipping Setup',
                                    'routes' => ['admin.shipping-management.index'],
                                    'route' => 'admin.shipping-management.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Orders',
                            'icon' => 'icons/duotune/general/gen051.svg',
                            'routes' => ['admin.brands.index', 'admin.brands.create', 'admin.brands.edit'],
                            'route' => 'admin.brands.index',
                            'subMenu' => [
                                [
                                    'title' => 'Order Dashboard',
                                    'routes' => ['admin.order-management.index'],
                                    'route' => 'admin.order-management.index',
                                ],
                                [
                                    'title' => 'Order Report',
                                    'routes' => ['admin.order.report.index'],
                                    'route' => 'admin.blog-category.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Blogs',
                            'icon' => 'icons/duotune/general/gen051.svg',
                            'routes' => [
                                'admin.blog-category.index',
                                'admin.blog-tags.index',
                                'admin.blog-post.index',
                                'admin.blog-post.create',
                                'admin.blog-post.edit',
                                // 'admin.categories.index',
                                // 'admin.categories.create',
                                // 'admin.categories.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Blog Category',
                                    'routes' => ['admin.blog-category.index'],
                                    'route' => 'admin.blog-category.index',
                                ],
                                [
                                    'title' => 'Blog Tag',
                                    'routes' => ['admin.blog-tags.index'],
                                    'route' => 'admin.blog-tags.index',
                                ],
                                [
                                    'title' => 'Blog Post',
                                    'routes' => ['admin.blog-post.index'],
                                    'route' => 'admin.blog-post.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Users',
                            'icon' => 'assets/media/icons/duotune/communication/com013.svg',
                            'subMenu' => [
                                [
                                    'title' => 'User List',
                                    'routes' => ['admin.user.index'],
                                    'route' => 'admin.user.index',
                                ],
                            ],
                        ],
                        // [
                        //     'title' => 'Staffs',
                        //     'icon' => 'icons/duotune/general/gen051.svg',
                        //     'routes' => [
                        //         'admin.staff.index',
                        //         'admin.staff.create',
                        //         'admin.staff.edit',
                        //         'admin.role.index',
                        //         'admin.role.create',
                        //         'admin.role.edit',
                        //         'admin.permission.index',
                        //         'admin.permission.create',
                        //         'admin.permission.edit',
                        //     ],
                        //     'subMenu' => [
                        //         [
                        //             'title' => 'Staff List',
                        //             'routes' => ['admin.staff.index', 'admin.staff.create', 'admin.staff.edit'],
                        //             'route' => 'admin.staff.index',
                        //         ],
                        //         [
                        //             'title' => 'Role & Permissions',
                        //             'routes' => [
                        //                 'admin.role.index',
                        //                 'admin.role.create',
                        //                 'admin.role.edit',
                        //                 'admin.permission.index',
                        //                 'admin.permission.create',
                        //                 'admin.permission.edit',
                        //             ],
                        //             'subMenu' => [
                        //                 [
                        //                     'title' => 'Roles List',
                        //                     'routes' => ['admin.role.index', 'admin.role.create', 'admin.role.edit'],
                        //                     'route' => 'admin.role.index',
                        //                 ],
                        //                 [
                        //                     'title' => 'Permissions List',
                        //                     'routes' => [
                        //                         'admin.permission.index',
                        //                         'admin.permission.create',
                        //                         'admin.permission.edit',
                        //                     ],
                        //                     'route' => 'admin.permission.index',
                        //                 ],
                        //             ],
                        //         ],
                        //     ],
                        // ],
                        [
                            'title' => 'Customer Support',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => [
                                'admin.contacts.index',
                                'admin.faq.index',
                                'admin.faq.create',
                                'admin.faq.edit',
                                'admin.newsletters.index',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Contact Messages',
                                    'routes' => ['admin.contacts.index'],
                                    'route' => 'admin.contacts.index',
                                ],
                                [
                                    'title' => 'FAQ Lists',
                                    'routes' => ['admin.faq.index', 'admin.faq.create', 'admin.faq.edit'],
                                    'route' => 'admin.faq.index',
                                ],
                                [
                                    'title' => 'Subscribed Emails List',
                                    'routes' => ['admin.newsletters.index'],
                                    'route' => 'admin.newsletters.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Site Contents',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => [
                                'admin.terms-condition.index',
                                'admin.terms-condition.create',
                                'admin.terms-condition.edit',
                                'admin.banner.index',
                                'admin.banner.create',
                                'admin.banner.edit',
                                'admin.privacy-policy.index',
                                'admin.privacy-policy.create',
                                'admin.privacy-policy.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Banners',
                                    'routes' => [
                                        'admin.banner.index',
                                        'admin.banner.create',
                                        'admin.banner.edit',
                                    ],
                                    'route' => 'admin.banner.index',
                                ],
                                [
                                    'title' => 'Terms & Condition',
                                    'routes' => [
                                        'admin.terms-condition.index',
                                        'admin.terms-condition.create',
                                        'admin.terms-condition.edit',
                                    ],
                                    'route' => 'admin.terms-condition.index',
                                ],
                                [
                                    'title' => 'Privacy Policy',
                                    'routes' => [
                                        'admin.privacy-policy.index',
                                        'admin.privacy-policy.create',
                                        'admin.privacy-policy.edit',
                                    ],
                                    'route' => 'admin.privacy-policy.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Settings',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => ['admin.settings.index', 'admin.email-settings.index'],
                            'subMenu' => [
                                [
                                    'title' => 'Website Setting',
                                    'routes' => ['admin.settings.index'],
                                    'route' => 'admin.settings.index',
                                ],
                                [
                                    'title' => 'Email Setting',
                                    'routes' => ['admin.email-settings.index'],
                                    'route' => 'admin.email-settings.index',
                                ],
                            ],
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <div data-kt-menu-trigger="click"
                        class="menu-item menu-accordion {{ Route::is(...$item['routes'] ?? []) ? 'here show' : '' }}">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40"
                                        x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path fill="#fbad3e"
                                                d="M66 6.44v22.87c0 2.45-1.99 4.44-4.44 4.44H37.07c-2.45 0-4.44-1.99-4.44-4.44V6.44c0-2.45 1.99-4.44 4.44-4.44h24.49C64.01 2 66 3.99 66 6.44z"
                                                opacity="1" data-original="#fbad3e" class=""></path>
                                            <path fill="#b53016"
                                                d="M66 6.44V9H32.63V6.44c0-2.45 1.99-4.44 4.44-4.44h24.49C64.01 2 66 3.99 66 6.44z"
                                                opacity="1" data-original="#b53016" class=""></path>
                                            <g fill="#fff">
                                                <circle cx="37.312" cy="5.495" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="40.187" cy="5.495" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="43.062" cy="5.495" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                            </g>
                                            <path fill="#912010"
                                                d="M62.375 5.673c-2.092.394-4.183.483-6.275.5-2.092-.015-4.183-.104-6.275-.5 2.092-.397 4.183-.486 6.275-.5 2.092.017 4.183.105 6.275.5z"
                                                opacity="1" data-original="#912010"></path>
                                            <path fill="#d1dafe"
                                                d="M35.37 23.36v22.87c0 2.45-1.99 4.44-4.44 4.44H6.44C3.99 50.67 2 48.68 2 46.23V23.36c0-2.45 1.99-4.44 4.44-4.44h24.49c2.45 0 4.44 1.99 4.44 4.44z"
                                                opacity="1" data-original="#d1dafe"></path>
                                            <path fill="#4269c4"
                                                d="M35.37 23.36v2.56H2v-2.56c0-2.45 1.99-4.44 4.44-4.44h24.49c2.45 0 4.44 1.99 4.44 4.44z"
                                                opacity="1" data-original="#4269c4"></path>
                                            <g fill="#fff">
                                                <circle cx="6.685" cy="22.42" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="9.56" cy="22.42" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="12.435" cy="22.42" r="1.063" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                            </g>
                                            <path fill="#255299"
                                                d="M31.747 22.597c-2.091.394-4.183.483-6.274.5-2.092-.015-4.184-.103-6.275-.5 2.091-.396 4.183-.485 6.275-.5 2.091.017 4.183.106 6.274.5z"
                                                opacity="1" data-original="#255299"></path>
                                            <path fill="#617f4d"
                                                d="m21.307 28.732-.003.005c-.035.074-.416.88-.915 1.767-.095.169-.194.34-.296.51l-.002.002c-.46.767-.978 1.501-1.407 1.788-1.039-.696-2.596-4.016-2.622-4.072.03.027.978.904 2.622.921 1.645-.017 2.593-.894 2.623-.921z"
                                                opacity="1" data-original="#617f4d"></path>
                                            <path fill="#aec46e"
                                                d="M25.098 32.63c-.325.557-.984.998-1.32 1.196a.342.342 0 0 1-.378-.02l-.407-.311-.827 4.921 2.255 8.442c0 .092-.064.18-.184.26a2.177 2.177 0 0 1-.54.228c-.263.076-.588.14-.957.199-.885.136-2.034.215-3.23.242-3.117.062-6.562-.246-6.562-.93l2.256-8.44-.83-4.922-.407.31a.341.341 0 0 1-.38.021c-.33-.198-.99-.639-1.315-1.196a.33.33 0 0 1-.007-.304l1.179-2.526c.003-.006.007-.013.014-.02a.355.355 0 0 1 .177-.154l2.427-.895c.014.03.434.926.98 1.883.513.902 1.139 1.856 1.641 2.19a.88.88 0 0 0 .1-.071c.146-.12.3-.28.46-.475.284-.346.575-.787.848-1.24l.004-.004c.099-.168.198-.342.294-.51.499-.888.881-1.695.916-1.767v-.006l2.43.895c.081.03.15.096.19.174l1.18 2.526a.33.33 0 0 1-.007.304z"
                                                opacity="1" data-original="#aec46e"></path>
                                            <g fill="#617f4d">
                                                <circle cx="18.683" cy="33.741" r=".355" fill="#617f4d"
                                                    opacity="1" data-original="#617f4d"></circle>
                                                <circle cx="18.683" cy="35.358" r=".355" fill="#617f4d"
                                                    opacity="1" data-original="#617f4d"></circle>
                                                <circle cx="18.683" cy="36.717" r=".355" fill="#617f4d"
                                                    opacity="1" data-original="#617f4d"></circle>
                                                <path
                                                    d="M22.832 38.697a.3.3 0 0 1-.263.272c-2.585.197-5.17.197-7.75 0-.134-.012-.238-.122-.263-.264a1.802 1.802 0 0 1-.011-.587.293.293 0 0 1 .27-.245c2.577-.09 5.158-.09 7.736 0 .133.004.252.11.27.253.029.212.029.402.01.571z"
                                                    fill="#617f4d" opacity="1" data-original="#617f4d"></path>
                                            </g>
                                            <path fill="#8a9bea"
                                                d="m58.962 16.243-3.377 3.377-.52-.52v9.968H43.562V19.1l-.52.52-3.373-3.373 2.136-2.14a8.427 8.427 0 0 1 3.505-2.115 4.321 4.321 0 0 0 4.008 2.707 4.32 4.32 0 0 0 4.003-2.707 8.476 8.476 0 0 1 3.5 2.11z"
                                                opacity="1" data-original="#8a9bea"></path>
                                            <g fill="#4269c4">
                                                <path
                                                    d="M55.067 29.07v.965a.55.55 0 0 1-.552.552h-10.4a.546.546 0 0 1-.551-.552v-.965zM39.665 16.244l3.375 3.375-.485.49a.556.556 0 0 1-.783 0l-2.598-2.597a.55.55 0 0 1 0-.777zM59.45 17.512l-2.597 2.597a.549.549 0 0 1-.777 0l-.491-.49 3.375-3.375.49.49a.55.55 0 0 1 0 .778zM53.321 11.992a4.32 4.32 0 0 1-4.003 2.707 4.321 4.321 0 0 1-4.008-2.707c.217-.068.439-.128.66-.179l.265-.06a3.365 3.365 0 0 0 3.083 2.013 3.353 3.353 0 0 0 3.074-2.013l.268.06c.222.051.444.11.661.18z"
                                                    fill="#4269c4" opacity="1" data-original="#4269c4"></path>
                                            </g>
                                            <path fill="#ffcecf"
                                                d="M46.407 57.844 34.17 54.523l-3.225-17.944a.794.794 0 0 1 .083-.473c.11-.242.337-.443.619-.472a4.09 4.09 0 0 1 4.665 3.59l.447 3.837 5.4-17.753a1.908 1.908 0 0 1 2.105-1.374c.18.033.34.082.47.142.806.37 1.248 1.267 1.05 2.176l-2.571 10.495-.018.065c.088-.192.19-.388.298-.57l.014-.03c.29-.501.762-1.236 1.343-1.786.095-.102.197-.19.293-.267.55-.455 1.195-.72 1.862-.499 1.739.566 1.112 3.289.65 4.746l-.014.03c-.008.046-.027.086-.03.12.115-.251.234-.537.397-.84.051-.111.112-.217.173-.324.149-.297.313-.575.492-.859a.845.845 0 0 1 .127-.197c.199-.274.4-.5.609-.61.038-.032.082-.048.127-.064l.087-.033c3.262-.734 2.78 2.761 2.138 4.295-.055.146-.11.266-.171.372.084-.156.178-.308.263-.44.39-.613.77-.987 1.149-1.203.193-.13.394-.197.592-.228.34-.051.65.018.931.147.882.416 1.308 1.428 1.226 2.402-.61 6.776-5.2 10.886-9.345 16.87z"
                                                opacity="1" data-original="#ffcecf"></path>
                                            <path fill="#8a9bea"
                                                d="m47.2 58.75-.61 2.11c-.18.62-.84.98-1.47.8l-11.55-3.39a1.19 1.19 0 0 1-.8-1.47l.62-2.1c.18-.62.83-.98 1.46-.8l11.55 3.39c.63.18.99.84.8 1.46z"
                                                opacity="1" data-original="#8a9bea"></path>
                                            <path fill="#51504f"
                                                d="m47.84 61.26-1.14 3.88c-.19.63-.85 1-1.49.81l-14.03-4.12c-.64-.18-1-.85-.81-1.48l1.13-3.88c.19-.64.85-1 1.49-.81l14.03 4.11c.64.19 1 .85.82 1.49z"
                                                opacity="1" data-original="#51504f"></path>
                                            <path fill="#3a3a3a"
                                                d="m47.71 61.67-.97 3.34c-.22.71-.95 1.11-1.65.91L31.3 61.87c-.56-.16-.93-.67-.95-1.24 1.99.89 4.53 1.58 7.31 1.91 3.99.47 7.63.09 10.05-.87z"
                                                opacity="1" data-original="#3a3a3a"></path>
                                            <g fill="#fea9ad">
                                                <path
                                                    d="M41.545 42.964c.163-1.765.643-3.422 1.203-5.042.145-.396.3-.788.466-1.175l-.018.065c.088-.192.19-.388.298-.57l.014-.03c.29-.501.762-1.236 1.343-1.786-.233 1.332-.621 2.604-1.055 3.868-.595 1.615-1.26 3.199-2.251 4.67zM45.569 44.87c.243-1.752.803-3.372 1.429-4.974.211-.488.423-.976.644-1.46l.014-.03c.096-.193.201-.387.302-.581.02-.039.03-.07.051-.11.051-.11.112-.216.173-.323.149-.297.313-.575.492-.859a.845.845 0 0 1 .127-.197c.199-.274.4-.5.609-.61-.273 1.605-.797 3.119-1.387 4.591-.666 1.584-1.402 3.135-2.454 4.554zM49.289 47.15c.243-1.753.808-3.383 1.438-4.97.322-.755.658-1.515 1.035-2.256-.055.146-.11.266-.171.372.084-.156.178-.308.263-.44.39-.613.77-.987 1.149-1.203-.286 1.368-.748 2.667-1.246 3.937-.665 1.585-1.411 3.131-2.468 4.56z"
                                                    fill="#fea9ad" opacity="1" data-original="#fea9ad"></path>
                                            </g>
                                            <path fill="#3d5e2a"
                                                d="M26.895 13.22a1.358 1.358 0 0 1-1.095 1.196 11.06 11.06 0 0 1-.764.139v1.114c0 .488-.59.746-.94.395l-1.114-1.086a.56.56 0 0 0-.414-.147c-2.007.12-4.033-.046-6.058-.452a1.292 1.292 0 0 1-1.032-1.067 23.063 23.063 0 0 1-.01-7.504 1.332 1.332 0 0 1 1.078-1.087 28.32 28.32 0 0 1 9.245-.01A1.33 1.33 0 0 1 26.905 5.9a43.176 43.176 0 0 1-.01 7.32z"
                                                opacity="1" data-original="#3d5e2a"></path>
                                            <path fill="#aec46e"
                                                d="M28.037 13.328a1.358 1.358 0 0 1-1.096 1.197 11.06 11.06 0 0 1-.764.138v1.115c0 .487-.589.745-.939.395l-1.114-1.086a.56.56 0 0 0-.414-.148c-2.008.12-4.033-.045-6.059-.45a1.292 1.292 0 0 1-1.031-1.069 23.063 23.063 0 0 1-.01-7.504 1.332 1.332 0 0 1 1.078-1.086 28.32 28.32 0 0 1 9.244-.01 1.33 1.33 0 0 1 1.115 1.188 43.176 43.176 0 0 1-.01 7.32z"
                                                opacity="1" data-original="#aec46e"></path>
                                            <path fill="#617f4d"
                                                d="M28.194 9.71c0 1.197-.046 2.394-.157 3.618a1.358 1.358 0 0 1-1.096 1.197 11.06 11.06 0 0 1-.764.138v1.115c0 .487-.589.745-.939.395l-1.114-1.086a.56.56 0 0 0-.414-.148c-2.008.12-4.033-.045-6.059-.45a1.292 1.292 0 0 1-1.031-1.069c-.064-.414-.129-.828-.166-1.234 1.253.562 2.716.875 4.29.875 3.27 0 6.106-1.363 7.45-3.351z"
                                                opacity="1" data-original="#617f4d"></path>
                                            <path fill="#ffffff"
                                                d="M23.862 9.64c-.492 0-.873-.16-1.141-.483-.269-.323-.403-.734-.403-1.233 0-.498.134-.909.403-1.232.268-.322.649-.484 1.14-.484.493 0 .873.162 1.142.484.268.323.403.734.403 1.232 0 .499-.135.91-.403 1.233-.269.322-.649.484-1.141.484zm0-.622c.275 0 .489-.103.642-.307.154-.205.23-.467.23-.787s-.076-.581-.23-.786a.757.757 0 0 0-.642-.307.757.757 0 0 0-.643.307c-.153.205-.23.467-.23.786 0 .32.077.582.23.787a.757.757 0 0 0 .643.307zm0 4.142a.303.303 0 0 1-.163-.048.39.39 0 0 1-.125-.125l-3.873-6.204a.39.39 0 0 1-.068-.21c0-.09.03-.16.091-.211a.352.352 0 0 1 .235-.077.3.3 0 0 1 .269.153l3.903 6.242a.303.303 0 0 1 .047.163c0 .09-.031.165-.095.226a.311.311 0 0 1-.221.09zm-3.893.076c-.492 0-.873-.161-1.141-.484-.269-.323-.403-.733-.403-1.232 0-.498.134-.91.403-1.232.268-.323.649-.484 1.141-.484s.872.161 1.14.484c.27.323.404.734.404 1.232 0 .499-.135.91-.403 1.232-.269.323-.649.484-1.14.484zm0-.623a.757.757 0 0 0 .642-.307c.154-.204.23-.466.23-.786s-.076-.582-.23-.786a.757.757 0 0 0-.642-.307.757.757 0 0 0-.642.307c-.154.204-.23.466-.23.786s.076.582.23.786a.757.757 0 0 0 .642.307z"
                                                opacity="1" data-original="#ffffff"></path>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">{{ $item['title'] }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                        @if (!empty($item['subMenu']))
                            <div
                                class="menu-sub menu-sub-accordion {{ Route::is(...$item['routes'] ?? []) ? 'menu-active-bg' : '' }}">
                                @foreach ($item['subMenu'] as $subItem)
                                    @if (isset($subItem['subMenu']))
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ $subItem['title'] }}</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-accordion {{ Route::is(...array_column($subItem['subMenu'], 'route') ?? []) ? 'here show' : '' }}">
                                                @foreach ($subItem['subMenu'] as $subSubItem)
                                                    <div class="menu-item">
                                                        @if (isset($subSubItem['route']))
                                                            <a class="menu-link {{ Route::is($subSubItem['route']) ? 'active' : '' }}"
                                                                href="{{ route($subSubItem['route']) }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span
                                                                    class="menu-title">{{ $subSubItem['title'] }}</span>
                                                            </a>
                                                        @else
                                                            <span class="menu-title">{{ $subSubItem['title'] }}</span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="menu-item">
                                            @if (isset($subItem['route']))
                                                <a class="menu-link {{ Route::is($subItem['routes']) ? 'active' : '' }}"
                                                    href="{{ route($subItem['route']) }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ $subItem['title'] }}</span>
                                                </a>
                                            @else
                                                <span class="menu-title">{{ $subItem['title'] }}</span>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            <a href="{{ route('admin.logout') }}" class="btn btn-custom btn-primary w-100"
                onclick="event.preventDefault();
      this.closest('form').submit();">
                <span class="btn-label">
                    @csrf
                    {{ __('Log Out') }}
                </span>
            </a>
        </form>
    </div>
</div>
