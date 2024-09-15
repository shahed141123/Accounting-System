<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ !empty($site->site_logo_white) && file_exists(public_path('storage/settings/' . $site->site_logo_white)) ? asset('storage/settings/' . $site->site_logo_white) : asset('frontend/img/logo.png') }}"
                alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            {{-- <span class="brand-text fw-light">{{ optional($setting)->site_title ?: config('app.name', 'AWS "|" Dashboard') }}</span> --}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @php
                    $menuItems = [
                        [
                            'title' => 'Dashboard',
                            'icon' => 'fa-solid fa-home',
                            'route' => 'admin.dashboard',
                            'routes' => [],
                        ],
                        [
                            'title' => 'Incomes',
                            'icon' => 'fa-solid fa-money text-danger',
                            'routes' => [
                                'admin.income.index',
                                'admin.income.create',
                                'admin.income.edit',
                                'admin.income-category.index',
                                'admin.income-category.create',
                                'admin.income-category.edit',
                                'admin.income-subcategory.index',
                                'admin.income-subcategory.create',
                                'admin.income-subcategory.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Income Category',
                                    'routes' => [
                                        'admin.income-category.index',
                                        'admin.income-category.create',
                                        'admin.income-category.edit',
                                    ],
                                    'route' => 'admin.income-category.index',
                                ],
                                [
                                    'title' => 'Income Sub Category',
                                    'routes' => [
                                        'admin.income-subcategory.index',
                                        'admin.income-subcategory.create',
                                        'admin.income-subcategory.edit',
                                    ],
                                    'route' => 'admin.income-subcategory.index',
                                ],
                                [
                                    'title' => 'Incomes List',
                                    'routes' => ['admin.income.index', 'admin.income.create', 'admin.income.edit'],
                                    'route' => 'admin.income.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Expenses',
                            'icon' => 'fa-solid fa-money text-danger',
                            'routes' => [
                                'admin.expense.index',
                                'admin.expense.create',
                                'admin.expense.edit',
                                'admin.expense-category.index',
                                'admin.expense-category.create',
                                'admin.expense-category.edit',
                                'admin.expense-subcategory.index',
                                'admin.expense-subcategory.create',
                                'admin.expense-subcategory.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Expense Category',
                                    'routes' => [
                                        'admin.expense-category.index',
                                        'admin.expense-category.create',
                                        'admin.expense-category.edit',
                                    ],
                                    'route' => 'admin.expense-category.index',
                                ],
                                [
                                    'title' => 'Expense Sub Category',
                                    'routes' => [
                                        'admin.expense-subcategory.index',
                                        'admin.expense-subcategory.create',
                                        'admin.expense-subcategory.edit',
                                    ],
                                    'route' => 'admin.expense-subcategory.index',
                                ],
                                [
                                    'title' => 'Expenses List',
                                    'routes' => ['admin.expense.index', 'admin.expense.create', 'admin.expense.edit'],
                                    'route' => 'admin.expense.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Cash book',
                            'icon' => 'fa-solid fa-money text-danger',
                            'routes' => [
                                    'admin.account.index',
                                    'admin.account.create',
                                    'admin.account.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Accounts',
                                    'routes' => [
                                        'admin.account.index',
                                        'admin.account.create',
                                        'admin.account.edit',
                                        'admin.balance-adjustment.index',
                                        'admin.balance-adjustment.create',
                                        'admin.balance-adjustment.edit',
                                        'admin.balance-transfer.index',
                                        'admin.balance-transfer.create',
                                        'admin.balance-transfer.edit',
                                    ],
                                    'route' => 'admin.account.index',
                                ],
                                [
                                    'title' => 'Balance Adjustment',
                                    'routes' => [
                                        'admin.balance-adjustment.index',
                                        'admin.balance-adjustment.create',
                                        'admin.balance-adjustment.edit',
                                    ],
                                    'route' => 'admin.balance-adjustment.index',
                                ],
                                [
                                    'title' => 'Balance Transfer',
                                    'routes' => [
                                        'admin.balance-transfer.index',
                                        'admin.balance-transfer.create',
                                        'admin.balance-transfer.edit',
                                    ],
                                    'route' => 'admin.balance-transfer.index',
                                ],
                                [
                                    'title' => 'Transaction History',
                                    'routes' => [
                                        'admin.transaction-history.index',
                                        'admin.transaction-history.create',
                                        'admin.transaction-history.edit',
                                    ],
                                    'route' => 'admin.transaction-history.index',
                                ],
                            ],
                        ],

                        [
                            'title' => 'Users',
                            'icon' => 'fa-solid fa-users text-primary',
                            'subMenu' => [
                                [
                                    'title' => 'User List',
                                    'routes' => ['admin.user.index'],
                                    'route' => 'admin.user.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Customer Support',
                            'icon' => 'fa-solid fa-headset text-info',
                            'routes' => ['admin.contacts.index', 'admin.newsletters.index'],
                            'subMenu' => [
                                [
                                    'title' => 'Contact Messages',
                                    'routes' => ['admin.contacts.index'],
                                    'route' => 'admin.contacts.index',
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
                            'icon' => 'fa-solid fa-file-pen text-light',
                            'routes' => [
                                'admin.terms-condition.index',
                                'admin.terms-condition.create',
                                'admin.terms-condition.edit',
                                'admin.privacy-policy.index',
                                'admin.privacy-policy.create',
                                'admin.privacy-policy.edit',
                            ],
                            'subMenu' => [
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
                            'icon' => 'fa-solid fa-gear text-secondary',
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
                    <li class="nav-item {{ Route::is(...$item['routes'] ?? []) ? 'menu-open' : '' }}">
                        <a href="{{ isset($item['route']) ? route($item['route']) : 'javascript:void(0)' }}"
                            class="nav-link {{ Route::is($item['route'] ?? '') ? 'active' : '' }}">
                            <i class="nav-icon {{ $item['icon'] ?? 'bi bi-speedometer' }}"></i>
                            <p>
                                {{ $item['title'] }}
                                @if (!empty($item['subMenu']))
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                @endif
                            </p>
                        </a>
                        @if (!empty($item['subMenu']))
                            <ul class="nav nav-treeview">
                                @foreach ($item['subMenu'] as $subItem)
                                    <li
                                        class="nav-item {{ Route::is(...$subItem['routes'] ?? []) ? 'menu-open' : '' }}">
                                        <a href="{{ isset($subItem['route']) ? route($subItem['route']) : 'javascript:void(0)' }}"
                                            class="nav-link {{ Route::is($subItem['route'] ?? '') ? 'active' : '' }}">
                                            <i
                                                class="nav-icon {{ $subItem['icon'] ?? 'bi bi-box-arrow-in-right' }}"></i>
                                            <p>
                                                {{ $subItem['title'] }}
                                                @if (!empty($subItem['subMenu']))
                                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                                @endif
                                            </p>
                                        </a>
                                        @if (!empty($subItem['subMenu']))
                                            <ul class="nav nav-treeview">
                                                @foreach ($subItem['subMenu'] as $subSubItem)
                                                    <li class="nav-item">
                                                        <a href="{{ isset($subSubItem['route']) ? route($subSubItem['route']) : 'javascript:void(0)' }}"
                                                            class="nav-link">
                                                            <i class="nav-icon bi bi-circle"></i>
                                                            <p>{{ $subSubItem['title'] }}</p>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
