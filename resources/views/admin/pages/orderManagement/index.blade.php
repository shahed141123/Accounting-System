<x-admin-app-layout :title="'Order Management'">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary align-items-center d-flex justify-content-between">
                <div>
                    <h1 class="mb-0 text-center w-100 text-white">Manage Your Orders</h1>
                </div>
            </div>
            <div class="card-body py-0">
                <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                    <thead class="bg-light-danger">
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th>Order Id</th>
                            <th>Customer</th>
                            <th>Created At</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>QTY</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="order-details.html">
                                    #as584
                                </a>
                            </td>
                            <td>Sazeduzzaman Saju</td>
                            <td>09:00 08/24/2024</td>
                            <td><span class="text-info fw-bold">£</span>680</td>
                            <td>Fashion</td>
                            <td>50</td>
                            <td class="text-center">
                                <span class="badge py-3 px-4 fs-7 badge-light-primary">Paid</span>
                                <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)">
                                    <button
                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                        data-bs-toggle="modal" data-bs-target="#printInovice">
                                        <i class="fa-solid fa-print"></i>
                                    </button>
                                </a>
                                <a href="javascript:void(0)">
                                    <button
                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                        data-bs-toggle="modal" data-bs-target="#vieworderInovice">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </a>
                                <a href="javascript:void(0)">
                                    <button
                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                        <i class="fa-solid fa-file-download"></i>
                                    </button>
                                </a>
                                <a href="">
                                    <button
                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Order Details
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            eCommerce </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Sales </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <div id="kt_app_content_container" class="app-container  container-xxl ">

                <div class="d-flex flex-column gap-7 gap-lg-10">

                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">

                        <div class="card card-flush py-4 flex-row-fluid">

                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Order Details (#14534)</h2>
                                </div>
                            </div>



                            <div class="card-body pt-0">
                                <div class="table-responsive">

                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-calendar fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Date Added
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">14/08/2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-wallet fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                        Payment Method
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    Online
                                                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/visa.svg"
                                                        class="w-50px ms-2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                        Shipping Method
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">Flat Shipping Rate</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>



                        <div class="card card-flush py-4  flex-row-fluid">

                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Customer Details</h2>
                                </div>
                            </div>



                            <div class="card-body pt-0">
                                <div class="table-responsive">

                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-profile-circle fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        Customer
                                                    </div>
                                                </td>

                                                <td class="fw-bold text-end">
                                                    <div class="d-flex align-items-center justify-content-end">

                                                        <div
                                                            class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                            <a
                                                                href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/details.html">
                                                                <div class="symbol-label">
                                                                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-23.jpg"
                                                                        alt="Dan Wilson" class="w-100">
                                                                </div>
                                                            </a>
                                                        </div>



                                                        <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/customers/details.html"
                                                            class="text-gray-600 text-hover-primary">
                                                            Dan Wilson </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-sms fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Email
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo1/apps/user-management/users/view.html"
                                                        class="text-gray-600 text-hover-primary">
                                                        dam@consilting.com </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-phone fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Phone
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">+6141 234 567</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>


                        <div class="card card-flush py-4  flex-row-fluid">

                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Documents</h2>
                                </div>
                            </div>



                            <div class="card-body pt-0">
                                <div class="table-responsive">

                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-devices fs-2 me-2"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span></i>
                                                        Invoice


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            aria-label="View the invoice generated by this order."
                                                            data-bs-original-title="View the invoice generated by this order."
                                                            data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end"><a
                                                        href="https://preview.keenthemes.com/metronic8/demo1/apps/invoices/view/invoice-3.html"
                                                        class="text-gray-600 text-hover-primary">#INV-000414</a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span></i>
                                                        Shipping


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            aria-label="View the shipping manifest generated by this order."
                                                            data-bs-original-title="View the shipping manifest generated by this order."
                                                            data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end"><a href="#"
                                                        class="text-gray-600 text-hover-primary">#SHP-0025410</a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-discount fs-2 me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        Reward Points


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            aria-label="Reward value earned by customer when purchasing this order"
                                                            data-bs-original-title="Reward value earned by customer when purchasing this order"
                                                            data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                </td>
                                                <td class="fw-bold text-end">600</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                            <div class="card card-flush py-4 flex-row-fluid position-relative">
                                <div
                                    class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                    <i class="ki-solid ki-two-credit-cart" style="font-size: 14em">
                                    </i>
                                </div>
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Billing Address</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    Unit 1/23 Hastings Road,<br>
                                    Melbourne 3000,<br>
                                    Victoria,<br>
                                    Australia.
                                </div>
                            </div>
                            <div class="card card-flush py-4 flex-row-fluid position-relative">

                                <div
                                    class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                    <i class="ki-solid ki-delivery" style="font-size: 13em">
                                    </i>
                                </div>
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Shipping Address</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    Unit 1/23 Hastings Road,<br>
                                    Melbourne 3000,<br>
                                    Victoria,<br>
                                    Australia.
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Order #14534</h2>
                                </div>
                                <div class="card-title">
                                    <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#printInovice"> <i
                                            class="fa-solid fa-print"></i> Print Or Download </a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-175px ps-5">Product</th>
                                                <th class="min-w-100px text-end">SKU</th>
                                                <th class="min-w-70px text-end">Qty</th>
                                                <th class="min-w-100px text-end">Unit Price</th>
                                                <th class="min-w-100px text-end pe-5">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <a href="" class="symbol symbol-50px">
                                                            <span class="symbol-label"
                                                                style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/ecommerce/210.png');"></span>
                                                        </a>



                                                        <div class="ms-5">
                                                            <a href=""
                                                                class="fw-bold text-gray-600 text-hover-primary">Product
                                                                1</a>
                                                            <div class="fs-7 text-muted">Delivery Date:
                                                                14/08/2024</div>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    03662006 </td>
                                                <td class="text-end">
                                                    2
                                                </td>
                                                <td class="text-end">
                                                    $120.00
                                                </td>
                                                <td class="text-end">
                                                    $240.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <a href="" class="symbol symbol-50px">
                                                            <span class="symbol-label"
                                                                style="background-image:url(https://preview.keenthemes.com/metronic8/demo1/assets/media//stock/ecommerce/100.png);"></span>
                                                        </a>
                                                        <div class="ms-5">
                                                            <a href=""
                                                                class="fw-bold text-gray-600 text-hover-primary">Footwear</a>
                                                            <div class="fs-7 text-muted">Delivery Date:
                                                                14/08/2024</div>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    03261009 </td>
                                                <td class="text-end">
                                                    1
                                                </td>
                                                <td class="text-end">
                                                    $24.00
                                                </td>
                                                <td class="text-end">
                                                    $24.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-end">
                                                    Subtotal
                                                </td>
                                                <td class="text-end">
                                                    $264.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-end">
                                                    VAT (0%)
                                                </td>
                                                <td class="text-end">
                                                    $0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-end">
                                                    Shipping Rate
                                                </td>
                                                <td class="text-end">
                                                    $5.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="fs-3 text-gray-900 text-end">
                                                    Grand Total
                                                </td>
                                                <td class="text-gray-900 fs-3 fw-bolder text-end">
                                                    $269.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Print Invoice Modal  --}}
    <!-- Modal -->
    <div class="modal fade" id="printInovice" tabindex="-1" aria-labelledby="printInoviceLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
                <div class="modal-body">
                    {{-- Invoice --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto w-100">
                                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                    <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>

                                    <div class="text-sm-end">
                                        <a href="#" class="d-block mw-150px ms-sm-auto">
                                            <img alt="Logo"
                                                src="https://piqpaq.flixzaglobal.com/frontend/img/logo.png"
                                                class="w-100">
                                        </a>

                                        <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                            <div>144 Hampton Road , Ilford , Essex IG1 1PR</div>

                                            <div>+447852802476</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column gap-7 gap-md-10">
                                    <div class="fw-bold fs-2">
                                        Dear Rasheduzzaman <span class="fs-6">(rashed@corpmail.com)</span>,<br>
                                        <span class="text-muted fs-5">Here are your order details. We thank you for
                                            your purchase.</span>
                                    </div>

                                    <div class="separator"></div>

                                    <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Order ID</span>
                                            <span class="fs-5">#14534</span>
                                        </div>

                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Date</span>
                                            <span class="fs-5">14 August, 2024</span>
                                        </div>

                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Invoice ID</span>
                                            <span class="fs-5">#INV-000414</span>
                                        </div>

                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Shipment ID</span>
                                            <span class="fs-5">#SHP-0025410</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Billing Address</span>
                                            <span class="fs-6">
                                                Unit 1/23 Hastings Road,<br>
                                                Melbourne 3000,<br>
                                                Victoria,<br>
                                                Australia.
                                            </span>
                                        </div>

                                        <div class="flex-root d-flex flex-column">
                                            <span class="text-muted">Shipping Address</span>
                                            <span class="fs-6">
                                                Unit 1/23 Hastings Road,<br>
                                                Melbourne 3000,<br>
                                                Victoria,<br>
                                                Australia.
                                            </span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between flex-column">
                                        <div class="table-responsive border-bottom mb-9">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="border-bottom fs-6 fw-bold text-muted">
                                                        <th class="min-w-175px pb-2 ps-5">Products</th>
                                                        <th class="min-w-70px text-end pb-2">SKU</th>
                                                        <th class="min-w-80px text-end pb-2">QTY</th>
                                                        <th class="min-w-100px text-end pb-2 pe-5">Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"
                                                                    class="symbol symbol-50px">
                                                                    <span class="symbol-label"
                                                                        style="background-image:url(https://preview.keenthemes.com/metronic8/demo1/assets/media//stock/ecommerce/1.png);"></span>
                                                                </a>

                                                                <div class="ms-5">
                                                                    <div class="fw-bold">Product 1</div>
                                                                    <div class="fs-7 text-muted">Delivery Date:
                                                                        14/08/2024</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            04483007 </td>
                                                        <td class="text-end">
                                                            2
                                                        </td>
                                                        <td class="text-end">
                                                            $240.00
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="https://preview.keenthemes.com/metronic8/demo1/apps/ecommerce/catalog/edit-product.html"
                                                                    class="symbol symbol-50px">
                                                                    <span class="symbol-label"
                                                                        style="background-image:url(https://preview.keenthemes.com/metronic8/demo1/assets/media//stock/ecommerce/100.png);"></span>
                                                                </a>

                                                                <div class="ms-5">
                                                                    <div class="fw-bold">Footwear</div>
                                                                    <div class="fs-7 text-muted">Delivery Date:
                                                                        14/08/2024</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            02618001 </td>
                                                        <td class="text-end">
                                                            1
                                                        </td>
                                                        <td class="text-end">
                                                            $24.00
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-end">
                                                            Subtotal
                                                        </td>
                                                        <td class="text-end">
                                                            $264.00
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-end">
                                                            VAT (0%)
                                                        </td>
                                                        <td class="text-end">
                                                            $0.00
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"
                                                            class="fs-3 text-gray-900 fw-bold text-end">
                                                            Grand Total
                                                        </td>
                                                        <td class="text-gray-900 fs-3 fw-bolder text-end">
                                                            $269.00
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack flex-wrap mt-lg-10 pt-05">
                                    <div class="my-1 me-5">
                                        <button type="button" class="btn btn-success my-1 me-5"
                                            onclick="window.print();">Print Invoice</button>

                                        <button type="button" class="btn btn-light-success my-1">Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Invoice end --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Print Invoice Modal End --}}
    {{-- view order Modal  --}}
    <!-- Modal -->
    <div class="modal fade" id="vieworderInovice" tabindex="-1" aria-labelledby="vieworderInoviceLabel"
        aria-hidden="true">
        <div class="modal-dialog        ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Worder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Print Invoice Modal End --}}
</x-admin-app-layout>
