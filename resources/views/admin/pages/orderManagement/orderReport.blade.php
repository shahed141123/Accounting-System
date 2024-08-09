<x-admin-app-layout :title="'Order Report'">
    <div class="row">
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i class="fa-product text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">03 Aug 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i class="fa-product text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order Pending
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">03 Aug 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mx-auto">
            <div class="card card-flush shadow-sm">
                <div class="card-body p-0">
                    <div class="d-flex flex-stack justify-content-between">
                        <div class="d-flex align-items-center me-3 p-8 rounded-3 bg-success">
                            <a href="">
                                <span class="bg-black rounded-3 p-3 me-3"><i class="fa-product text-white fa-product-hunt fs-3" aria-hidden="true"></i></span>
                            </a>
                            <div class="flex-grow-1">
                                <a href="#" class="text-black fs-5 fw-bold lh-0">Total Order Delivery
                                    <span class="text-black fw-semibold d-block fs-6 pt-4">03 Aug 2024</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center pe-4">
                            <div>
                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush mt-10">
        <div class="card-header bg-success align-items-center">
            <h3 class="card-title">Mange Your Orders</h3>
            <div>
                <a type="button" href="{{ route('admin.product.create') }}" class="btn btn-primary btn btn-sm">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table  align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px ps-5">Order ID</th>
                        <th class="min-w-100px">SL</th>
                        <th class="">Created</th>
                        <th class="">Customer</th>
                        <th class="">Total</th>
                        <th class="">Profit</th>
                        <th class="">Status</th>
                        <th class="">Action</th>
                        <th class=""></th>
                    </tr>
                </thead>


                <tbody class="fw-bold text-gray-600">
                    <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none bg-light">
                        <td colspan="2">
                            <div class="d-flex align-items-center gap-3">
                                <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                    <img src="https://preview.keenthemes.com/html/metronic/docs/assets/media/stock/ecommerce/" alt=""
                                        data-kt-docs-datatable-subtable="template_image" />
                                </a>
                                <div class="d-flex flex-column text-muted">
                                    <a href="#" class="text-gray-900 text-hover-primary fw-bold"
                                        data-kt-docs-datatable-subtable="template_name">Product name</a>
                                    <div class="fs-7" data-kt-docs-datatable-subtable="template_description">Product
                                        description</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="text-gray-900 fs-7">Cost</div>
                            <div class="text-muted fs-7 fw-bold" data-kt-docs-datatable-subtable="template_cost">1</div>
                        </td>
                        <td class="text-end">
                            <div class="text-gray-900 fs-7">Qty</div>
                            <div class="text-muted fs-7 fw-bold" data-kt-docs-datatable-subtable="template_qty">1</div>
                        </td>
                        <td class="text-end">
                            <div class="text-gray-900 fs-7">Total</div>
                            <div class="text-muted fs-7 fw-bold" data-kt-docs-datatable-subtable="template_total">name
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="text-gray-900 fs-7 me-3">On hand</div>
                            <div class="text-muted fs-7 fw-bold" data-kt-docs-datatable-subtable="template_stock">32
                            </div>
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#" class="text-gray-900 text-hover-primary">#XGT-346</a>
                        </td>

                        <td class="">
                            01
                        </td>
                        <td class="">
                            10 Nov 2021, 10:30 am
                        </td>

                        <td class="">
                            <a href="" class="text-gray-900 text-hover-primary">Emma Smith</a>
                        </td>

                        <td class="">
                            $630.00
                        </td>

                        <td class="">
                            <span class="text-gray-900 fw-bold">$86.70</span>
                        </td>

                        <td class="">
                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                        </td>
                        <td class="">
                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                        </td>

                        <td class="">
                            <button type="button"
                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                data-kt-docs-datatable-subtable="expand_row">
                                <span class="svg-icon fs-3 m-0 toggle-off">
                                    <i class="fa-solid fa-plus"></i>
                                </span>
                                <span class="svg-icon fs-3 m-0 toggle-on">
                                    <i class="fa-solid fa-minus"></i>
                                </span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <script>
            "use strict";

            // Class definition
            var KTDocsDatatableSubtable = function() {
                var table;
                var datatable;
                var template;

                // Private methods
                const initDatatable = () => {
                    // Set date data order
                    const tableRows = table.querySelectorAll('tbody tr');

                    // tableRows.forEach(row => {
                    //     const dateRow = row.querySelectorAll('td');
                    //     const realDate = moment(dateRow[1].innerHTML, "DD MMM YYYY, LT")
                    // .format(); // select date from 2nd column in table

                    //     // Skip template
                    //     if (!row.closest('[data-kt-docs-datatable-subtable="subtable_template"]')) {
                    //         dateRow[1].setAttribute('data-order', realDate);
                    //         dateRow[1].innerText = moment(realDate).fromNow();
                    //     }
                    // });

                    // Get subtable template
                    const subtable = document.querySelector('[data-kt-docs-datatable-subtable="subtable_template"]');
                    template = subtable.cloneNode(true);
                    template.classList.remove('d-none');

                    // Remove subtable template
                    subtable.parentNode.removeChild(subtable);

                    // Init datatable with search, length, and pagination
                    datatable = $(table).DataTable({
                        "info": false,
                        "lengthChange": true,
                        "pageLength": 6,
                        "ordering": false,
                        "paging": true,
                        "searching": true,
                        "language": {
                            "lengthMenu": "Show _MENU_",
                            "search": "Search:",
                            "paginate": {
                                "previous": "Previous",
                                "next": "Next"
                            },
                            "info": "Showing _START_ to _END_ of _TOTAL_ entries"
                        },
                        "dom": "<'row mb-2'" +
                            "<'col-sm-6 d-flex align-items-center justify-content-start dt-toolbar'l>" +
                            "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                            ">" +
                            "<'table-responsive'tr>" +
                            "<'row'" +
                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                            ">"
                    });

                    // Re-init functions on every table re-draw
                    datatable.on('draw', function() {
                        resetSubtable();
                        handleActionButton();
                    });
                }

                // Subtable data sample
                const data = [{
                        image: '76',
                        name: 'Go Pro 8',
                        description: 'Latest version of Go Pro.',
                        cost: '500.00',
                        qty: '1',
                        total: '500.00',
                        stock: '12'
                    },
                    {
                        image: '60',
                        name: 'Bose Earbuds',
                        description: 'Top quality earbuds from Bose.',
                        cost: '300.00',
                        qty: '1',
                        total: '300.00',
                        stock: '8'
                    },
                    {
                        image: '211',
                        name: 'Dry-fit Sports T-shirt',
                        description: 'Comfortable sportswear for everyday use.',
                        cost: '89.00',
                        qty: '1',
                        total: '89.00',
                        stock: '18'
                    },
                    {
                        image: '21',
                        name: 'Apple Airpod 3',
                        description: 'Apple\'s latest and most advanced earbuds.',
                        cost: '200.00',
                        qty: '2',
                        total: '400.00',
                        stock: '32'
                    },
                    {
                        image: '83',
                        name: 'Nike Pumps',
                        description: 'Apple\'s latest and most advanced headphones.',
                        cost: '200.00',
                        qty: '1',
                        total: '200.00',
                        stock: '8'
                    }
                ];

                // Handle action button
                const handleActionButton = () => {
                    const buttons = document.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

                    // Sample row items counter --- for demo purpose only, remove this variable in your project
                    const rowItems = [4, 1, 5, 1, 4, 2];

                    buttons.forEach((button, index) => {
                        button.addEventListener('click', e => {
                            e.stopImmediatePropagation();
                            e.preventDefault();

                            const row = button.closest('tr');
                            const rowClasses = ['isOpen', 'border-bottom-0'];

                            // Get total number of items to generate --- for demo purpose only, remove this code snippet in your project
                            const demoData = [];
                            for (var j = 0; j < rowItems[index]; j++) {
                                demoData.push(data[j]);
                            }
                            // End of generating demo data

                            // Handle subtable expanded state
                            if (row.classList.contains('isOpen')) {
                                // Remove all subtables from current order row
                                while (row.nextSibling && row.nextSibling.getAttribute(
                                        'data-kt-docs-datatable-subtable') === 'subtable_template') {
                                    row.nextSibling.parentNode.removeChild(row.nextSibling);
                                }
                                row.classList.remove(...rowClasses);
                                button.classList.remove('active');
                            } else {
                                populateTemplate(demoData, row);
                                row.classList.add(...rowClasses);
                                button.classList.add('active');
                            }
                        });
                    });
                }

                // Populate template with content/data
                const populateTemplate = (data, target) => {
                    data.forEach((d, index) => {
                        // Clone template node
                        const newTemplate = template.cloneNode(true);

                        // Stock badges
                        const lowStock = `<div class="badge badge-light-warning">Low Stock</div>`;
                        const inStock = `<div class="badge badge-light-success">In Stock</div>`;

                        // Select data elements
                        const image = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_image"]');
                        const name = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_name"]');
                        const description = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_description"]');
                        const cost = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_cost"]');
                        const qty = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_qty"]');
                        const total = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_total"]');
                        const stock = newTemplate.querySelector(
                            '[data-kt-docs-datatable-subtable="template_stock"]');

                        // Populate elements with data
                        const imageSrc = image.getAttribute('src');
                        image.setAttribute('src', imageSrc + d.image + '.png');
                        name.innerText = d.name;
                        description.innerText = d.description;
                        cost.innerText = d.cost;
                        qty.innerText = d.qty;
                        total.innerText = d.total;
                        if (d.stock > 10) {
                            stock.innerHTML = inStock;
                        } else {
                            stock.innerHTML = lowStock;
                        }

                        // New template border controller
                        if (data.length === 1) {
                            let borderClasses = ['rounded', 'rounded-end-0'];
                            newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                            borderClasses = ['rounded', 'rounded-start-0'];
                            newTemplate.querySelectorAll('td')[4].classList.add(...borderClasses);
                            newTemplate.classList.add('border-bottom-0');
                        } else {
                            if (index === (data.length - 1)) {
                                let borderClasses = ['rounded-start', 'rounded-bottom-0'];
                                newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                                borderClasses = ['rounded-end', 'rounded-bottom-0'];
                                newTemplate.querySelectorAll('td')[4].classList.add(...borderClasses);
                            }
                            if (index === 0) {
                                let borderClasses = ['rounded-start', 'rounded-top-0'];
                                newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                                borderClasses = ['rounded-end', 'rounded-top-0'];
                                newTemplate.querySelectorAll('td')[4].classList.add(...borderClasses);
                                newTemplate.classList.add('border-bottom-0');
                            }
                        }

                        // Insert new template into table
                        const tbody = table.querySelector('tbody');
                        tbody.insertBefore(newTemplate, target.nextSibling);
                    });
                }

                // Reset subtable
                const resetSubtable = () => {
                    const subtables = document.querySelectorAll(
                    '[data-kt-docs-datatable-subtable="subtable_template"]');
                    subtables.forEach(st => {
                        st.parentNode.removeChild(st);
                    });

                    const rows = table.querySelectorAll('tbody tr');
                    rows.forEach(r => {
                        r.classList.remove('isOpen');
                        if (r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]')) {
                            r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]').classList.remove(
                                'active');
                        }
                    });
                }

                // Public methods
                return {
                    init: function() {
                        table = document.querySelector('#kt_docs_datatable_subtable');

                        if (!table) {
                            return;
                        }

                        initDatatable();
                        handleActionButton();
                    }
                }
            }();

            // Document Ready
            KTUtil.onDOMContentLoaded(function() {
                KTDocsDatatableSubtable.init();
            });
        </script>
    @endpush
</x-admin-app-layout>
