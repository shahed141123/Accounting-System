<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\EmailSettingController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\BalanceAdjustmentController;
use App\Http\Controllers\Admin\BalanceSheetController;
use App\Http\Controllers\Admin\BalanceTransferController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\ClientInvoiceController;
use App\Http\Controllers\Admin\ClientNonInvoiceController;
use App\Http\Controllers\Admin\ClientPayableReportController;
use App\Http\Controllers\Admin\ClientReceivableReportController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\CollectionReportController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\OrderManagementController;
use App\Http\Controllers\Admin\PageBannerController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShippingManagementController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StockManagementController;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\DealBannerController;
use App\Http\Controllers\Admin\ExpenseCategoryController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ExpenseReportController;
use App\Http\Controllers\Admin\ExpenseSubCategoryController;
use App\Http\Controllers\Admin\IncomeCategoryController;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\IncomeSubCategoryController;
use App\Http\Controllers\Admin\PayrollController;
use App\Http\Controllers\Admin\SalesUserReportController;
use App\Http\Controllers\Admin\SummaryReportController;
use App\Http\Controllers\Admin\TodayReportController;
use App\Http\Controllers\Admin\TransactionHistoryController;

Route::get('/', function () {
    return redirect()->route('admin.login');
})->name('home');

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])
    ->middleware(['auth:admin', 'verified'])
    ->name('admin.dashboard');

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    // Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['verified'])->name('dashboard');

    Route::resources(
        [
            'faq-category'    => FaqCategoryController::class, //done
        ],
        ['except' => ['show', 'index', 'create', 'edit']]
    );
    Route::resources(
        [
            'catalogue'           => CatalogueController::class, //done
            'shipping-management' => ShippingManagementController::class, //done
            'income-category'     => IncomeCategoryController::class,
            'income-subcategory'  => IncomeSubCategoryController::class,
            'expense-category'    => ExpenseCategoryController::class,
            'expense-subcategory' => ExpenseSubCategoryController::class,
        ],
        ['except' => ['show', 'create', 'edit']]
    );
    Route::resources(
        [
            'faq'                 => FaqController::class,
            'role'                => RoleController::class,
            'permission'          => PermissionController::class,
            'email-settings'      => EmailSettingController::class,
            'terms-condition'     => TermsAndConditionController::class,
            'privacy-policy'      => PrivacyPolicyController::class,
            'deal-banner'         => DealBannerController::class,
            'income'              => IncomeController::class,
            'expense'             => ExpenseController::class,
            'account'             => AccountController::class,
            'balance-adjustment'  => BalanceAdjustmentController::class,
            'balance-transfer'    => BalanceTransferController::class,
            'transaction-history' => TransactionHistoryController::class,
            'balance-sheet'       => BalanceSheetController::class,
            'clients'             => ClientsController::class,
            'client-invoice'      => ClientInvoiceController::class,
            'client-non-invoice'  => ClientNonInvoiceController::class,
            'today-report'        => TodayReportController::class,
            'summary-report'      => SummaryReportController::class,
            'expense-report'      => ExpenseReportController::class,
            'client-receivable'   => ClientReceivableReportController::class,
            'client-payable'      => ClientPayableReportController::class,
            'sales-user'          => SalesUserReportController::class,
            'collection-report'   => CollectionReportController::class,
            'payroll'             => PayrollController::class,
        ],
        ['except' => ['show']]
    );
    Route::resources(
        [
            'user'                  => UserController::class, //done
            'staff'                 => StaffController::class, //done
            'user-management'       => UserManagementController::class, //done
            'admin-managemnet'      => UserManagementController::class, //done
            'categories'            => CategoryController::class, //done
            'icons'                 => IconController::class, //done
            'newsletters'           => NewsletterController::class,
            'brands'                => BrandController::class, //done
            'contacts'              => ContactController::class,
            'product'               => ProductController::class,
            'banner'                => PageBannerController::class,
        ],
    );

    Route::controller(StockManagementController::class)->group(function () {
        Route::get('/stock-management', 'index')->name('stock-management.index');
        Route::put('/stock/update/{id}', 'stockUpdate')->name('stock.update');
    });
    // Route::controller(ShippingManagementController::class)->group(function () {
    //     Route::get('/shipping-management', 'index')->name('shipping-management.index');
    // });
    Route::controller(OrderManagementController::class)->group(function () {
        Route::get('/order-management', 'index')->name('order-management.index');
        Route::get('/order/{id}/details', 'orderDetails')->name('orderDetails');
        Route::get('/order/report', 'orderReport')->name('orderReport');
    });

    Route::get('active-mail-configuration', [EmailSettingController::class, 'activeMailConfiguration'])->name('active.mail.configuration');
    Route::put('email-settings', [EmailSettingController::class, 'emailUpdateOrCreate'])->name('email.settings.updateOrCreate');
    Route::post('send-test-mail', [EmailSettingController::class, 'sendTestMail'])->name('send.test.mail');

    Route::post('email-settings/toggle-status/{id}', [EmailSettingController::class, 'toggleStatus'])->name('email-settings.toggle-status');

    Route::post('icons/toggle-status/{id}', [IconController::class, 'toggleStatus'])->name('icons.toggle-status');
    Route::post('brands/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('brands.toggle-status');
    Route::post('categories/toggle-status/{id}', [CategoryController::class, 'toggleStatus'])->name('categories.toggle-status');
    Route::post('banner/toggle-status/{id}', [PageBannerController::class, 'toggleStatus'])->name('banner.toggle-status');
    Route::post('deal-banner/toggle-status/{id}', [DealBannerController::class, 'toggleStatus'])->name('deal-banner.toggle-status');
    Route::post('product/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('product.toggle-status');
    Route::post('user/toggle-status/{id}', [UserController::class, 'toggleStatus'])->name('user.toggle-status');
    // Route::post('services/toggle-status/{id}', [ServiceController::class, 'toggleStatus'])->name('services.toggle-status');

    Route::get('/backup', [Controller::class, 'downloadBackup']);

    Route::get('role/{roleId}/give-permission', [RoleController::class, 'givePermission'])->name('role.give-permission');
    Route::patch('role/{roleId}/give-permission', [RoleController::class, 'storePermission'])->name('role.store-permission');

    Route::get('log', [LogController::class, 'index'])->name('log.index');
    Route::get('log/{id}', [LogController::class, 'show'])->name('log.show');
    Route::delete('log/{id}', [LogController::class, 'destroy'])->name('log.destroy');
    Route::delete('multiimage/{id}', [ProductController::class, 'multiImageDestroy'])->name('multiimage.destroy');
    Route::get('log/download/{id}', [LogController::class, 'download'])->name('log.download');

    Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');
    Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show');
    Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'updateOrcreateSetting'])->name('settings.updateOrCreate');

    // Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    // Route::put('/banner', [BannerController::class, 'updateOrcreateBanner'])->name('banner.updateOrCreate');

    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
    Route::put('/about-us', [AboutUsController::class, 'updateOrcreateAboutUs'])->name('about-us.updateOrCreate');

    // Bulk Delete
    // web.php
    Route::post('/categories/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');
});
