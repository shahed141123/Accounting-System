<aside class="app-sidebar bg-body-secondary" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ asset('images/logo-color.png') }}" alt="AdminLTE Logo" class="brand-image" />
        </a>
    </div>
    <div class="sidebar-wrapper position-relative"> <!-- Added position-relative -->
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @php
                    $menuItems = [
                        [
                            'title' => 'Dashboard',
                            'icon' => 'fa-solid fa-home text-info',
                            'route' => 'admin.dashboard',
                            'routes' => [],
                        ],
                        [
                            'title' => 'Reports',
                            'icon' => 'fa-solid fa-file text-info',
                            'routes' => [
                                'admin.balance-sheet.index',
                                'admin.balance-sheet.create',
                                'admin.balance-sheet.edit',
                                'admin.today-report.index',
                                'admin.today-report.create',
                                'admin.today-report.edit',
                                'admin.summary-report.index',
                                'admin.summary-report.create',
                                'admin.summary-report.edit',
                                'admin.expense-report.index',
                                'admin.expense-report.create',
                                'admin.expense-report.edit',
                                'admin.client-receivable.index',
                                'admin.client-receivable.create',
                                'admin.client-receivable.edit',
                                'admin.client-payable.index',
                                'admin.client-payable.create',
                                'admin.client-payable.edit',
                                'admin.sales-user.index',
                                'admin.sales-user.create',
                                'admin.sales-user.edit',
                                'admin.collection-report.index',
                                'admin.collection-report.create',
                                'admin.collection-report.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Balance Sheet',
                                    'routes' => [
                                        'admin.balance-sheet.index',
                                        'admin.balance-sheet.create',
                                        'admin.balance-sheet.edit',
                                    ],
                                    'route' => 'admin.balance-sheet.index',
                                ],
                                [
                                    'title' => 'Today Report',
                                    'routes' => [
                                        'admin.today-report.index',
                                        'admin.today-report.create',
                                        'admin.today-report.edit',
                                    ],
                                    'route' => 'admin.today-report.index',
                                ],
                                [
                                    'title' => 'Summary Report',
                                    'routes' => [
                                        'admin.summary-report.index',
                                        'admin.summary-report.create',
                                        'admin.summary-report.edit',
                                    ],
                                    'route' => 'admin.summary-report.index',
                                ],
                                [
                                    'title' => 'Expense Report',
                                    'routes' => [
                                        'admin.expense-report.index',
                                        'admin.expense-report.create',
                                        'admin.expense-report.edit',
                                    ],
                                    'route' => 'admin.expense-report.index',
                                ],
                                [
                                    'title' => 'Client Receivable Report',
                                    'routes' => [
                                        'admin.client-receivable.index',
                                        'admin.client-receivable.create',
                                        'admin.client-receivable.edit',
                                    ],
                                    'route' => 'admin.client-receivable.index',
                                ],
                                [
                                    'title' => 'Client Payable Report',
                                    'routes' => [
                                        'admin.client-payable.index',
                                        'admin.client-payable.create',
                                        'admin.client-payable.edit',
                                    ],
                                    'route' => 'admin.client-payable.index',
                                ],
                                [
                                    'title' => 'Sales By User Report',
                                    'routes' => [
                                        'admin.sales-user.index',
                                        'admin.sales-user.create',
                                        'admin.sales-user.edit',
                                    ],
                                    'route' => 'admin.sales-user.index',
                                ],
                                [
                                    'title' => 'Collection By User Report',
                                    'routes' => [
                                        'admin.collection-report.index',
                                        'admin.collection-report.create',
                                        'admin.collection-report.edit',
                                    ],
                                    'route' => 'admin.collection-report.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Expenses',
                            'icon' => 'fa-solid fa-calculator text-info',
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
                            'title' => 'Incomes',
                            'icon' => 'fa-solid fa-wallet text-info',
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
                            'title' => 'Cash book',
                            'icon' => 'fa-solid fa-book text-info',
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
                                'admin.transaction-history.index',
                                'admin.transaction-history.create',
                                'admin.transaction-history.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Accounts',
                                    'routes' => ['admin.account.index', 'admin.account.create', 'admin.account.edit'],
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
                            'title' => 'Payments',
                            'icon' => 'fa-solid fa-receipt text-info',
                            'routes' => [
                                'admin.client-invoice.index',
                                'admin.client-invoice.create',
                                'admin.client-invoice.edit',
                                'admin.client-non-invoice.index',
                                'admin.client-non-invoice.create',
                                'admin.client-non-invoice.edit',
                                'admin.payroll.index',
                                'admin.payroll.create',
                                'admin.payroll.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Client Invoice',
                                    'routes' => [
                                        'admin.client-invoice.index',
                                        'admin.client-invoice.create',
                                        'admin.client-invoice.edit',
                                    ],
                                    'route' => 'admin.client-invoice.index',
                                ],
                                [
                                    'title' => 'Client Non Invoice',
                                    'routes' => [
                                        'admin.client-non-invoice.index',
                                        'admin.client-non-invoice.create',
                                        'admin.client-non-invoice.edit',
                                    ],
                                    'route' => 'admin.client-non-invoice.index',
                                ],
                                [
                                    'title' => 'Payroll',
                                    'routes' => ['admin.payroll.index', 'admin.payroll.create', 'admin.payroll.edit'],
                                    'route' => 'admin.payroll.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Clients',
                            'icon' => 'fa-solid fa-users text-info',
                            'subMenu' => [
                                [
                                    'title' => 'clients List',
                                    'routes' => ['admin.clients.index'],
                                    'route' => 'admin.clients.index',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Users',
                            'icon' => 'fa-solid fa-users text-info',
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
                            'icon' => 'fa-solid fa-file-pen text-info',
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
                            'title' => 'Setup',
                            'icon' => 'fa-solid fa-gear text-info',
                            'routes' => [
                                'admin.settings.index',
                                'admin.email-settings.index',
                                'admin.email-settings.index'
                            ],
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
                                [
                                    'title' => 'Profile Setting',
                                    // 'routes' => ['admin.email-settings.index'],
                                    // 'route' => 'admin.email-settings.index',
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
        <div class="logout-btn-wrapper">
            <div class="logout-btn">
                <button class="btn btn-info w-75">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2" class="h-6 w-6" width="25px" height="25px">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <span class="ps-3">Logout</span>
                </button>
            </div>
        </div>
    </div>
</aside>
