<x-admin-app-layout :title="'Product Add'">
    <style>
        .image-input-placeholder {
            background-image: url("https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/files/blank-image.svg");
        }
    </style>
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form id="kt_ecommerce_add_product_form" class="" action="{{ route('admin.product.create') }}" method="POST">
            @csrf
            <div class="row">
                <div class="gap-7 gap-lg-10 mb-7  col-4">
                    {{-- Status Card Start --}}
                    <div class="card card-flush py-4 mb-6">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                name="status" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_status_select">
                                <option></option>
                                <option value="published" selected>Published</option>
                                <option value="draft">Draft</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <div class="text-muted fs-7">Set the product status.</div>
                        </div>
                    </div>
                    {{-- Status Card End --}}
                    {{-- Category Card Start --}}
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Category</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="fv-row">
                                <label class="form-label">Brand Id</label>
                                <select class="form-select mb-2" name="brand_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row">
                                <label class="form-label">Category Id</label>
                                <select class="form-control select mb-2" name="category_id[]" multiple
                                    multiselect-search="true" multiselect-select-all="true" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    {!! $categoriesOptions !!}
                                </select>
                                {{-- <select class="form-select mb-2" name="category_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    <option value="">Red</option>
                                    <option value="">White</option>
                                    <option value="">Black</option>
                                </select> --}}
                            </div>
                            {{-- <div class="fv-row">
                                <label class="form-label">Attribute Id</label>
                                <select class="form-select mb-2" name="attribute_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                    <option></option>
                                    <option value="">Computers</option>
                                    <option value="">Watches</option>
                                    <option value="">Headphones</option>
                                    <option value="">Footwear</option>
                                    <option value="">Cameras</option>
                                    <option value="">Shirts</option>
                                    <option value="">Household</option>
                                    <option value="">Handbags</option>
                                    <option value="">Wines</option>
                                    <option value="">Sandals</option>
                                </select>
                            </div> --}}
                            <div class="fv-row">
                                <label for="kt_docs_select2_country" class="mb-2">Select Color</label>
                                <select class="form-select" placeholder="Color" name="color_id"
                                    id="kt_docs_select2_country">
                                    <option data-color="#000">Select Color</option>
                                    <option value="red" data-color="#ff0000">Red</option>
                                    <option value="green" data-color="#00ff00">Green</option>
                                    <option value="blue" data-color="#0000ff">Blue</option>
                                    <option value="yellow" data-color="#ffff00">Yellow</option>
                                    <option value="orange" data-color="#ffa500">Orange</option>
                                    <option value="purple" data-color="#800080">Purple</option>
                                    <option value="pink" data-color="#ffc0cb">Pink</option>
                                    <option value="brown" data-color="#a52a2a">Brown</option>
                                    <option value="black" data-color="#000000">Black</option>
                                    <option value="white" data-color="#ffffff">White</option>
                                    <option value="gray" data-color="#808080">Gray</option>
                                    <option value="cyan" data-color="#00ffff">Cyan</option>
                                    <option value="magenta" data-color="#ff00ff">Magenta</option>
                                    <option value="lime" data-color="#00ff00">Lime</option>
                                    <option value="maroon" data-color="#800000">Maroon</option>
                                    <option value="navy" data-color="#000080">Navy</option>
                                    <option value="olive" data-color="#808000">Olive</option>
                                    <option value="teal" data-color="#008080">Teal</option>
                                    <option value="silver" data-color="#c0c0c0">Silver</option>
                                    <option value="gold" data-color="#ffd700">Gold</option>
                                    <!-- Add more options with respective colors -->
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- Category Card End --}}
                </div>
                <div class="gap-7 gap-lg-10 col-8">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_media">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_advanced">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_package">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_price">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_meta">Meta Options</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                            role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- General Info --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="Product name recommended" />
                                            <div class="text-muted fs-7">
                                                A product name is and recommended to be unique.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Tags</label>
                                            <select class="form-select mb-2" name="tags"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="Computers">Computers</option>
                                                <option value="Watches">Watches</option>
                                                <option value="Headphones">Headphones</option>
                                                <option value="Footwear">Footwear</option>
                                                <option value="Cameras">Cameras</option>
                                                <option value="Shirts">Shirts</option>
                                                <option value="Household">Household</option>
                                                <option value="Handbags">Handbags</option>
                                                <option value="Wines">Wines</option>
                                                <option value="Sandals">Sandals</option>
                                            </select>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="short_description" placeholder="Add Product Short Description" class="form-control mb-2"
                                                cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Product Overview</label>
                                            <div id="overview_editor" name="overview">
                                                {{-- Content --}}
                                            </div>
                                            <div class="text-muted fs-7">
                                                Add product overview here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Product Description</label>
                                            <div id="description_editor" name="description">
                                                {{-- Content --}}
                                            </div>
                                            <div class="text-muted fs-7">
                                                Add product description here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <label class="form-label">Product Specification</label>
                                            <div id="specification_editor" name="specification">
                                                {{-- Content --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_media" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Inventory --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Media</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="" class="form-label">Set the product thumbnail
                                                    image.
                                                    Only *.png, *.jpg and *.jpeg image
                                                    files are accepted</label>
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                    data-kt-image-input="true">
                                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change avatar">
                                                        <i class="fa-solid fa-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <input type="file" name="thumbnail"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="thumbnail_remove" />
                                                    </label>
                                                </div>
                                            </div>
                                            {{-- Product Mutli Image --}}
                                            <div class="col-8">
                                                <div class="fv-row pt-5">
                                                    <label for="" class="form-label">Add the product multi
                                                        image</label>
                                                    <div class="dropzone" id="productmulti_imag">
                                                        <div class="dz-message needsclick">
                                                            <i class="fa-solid fa-photo-film fs-3x text-primary"></i>
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files
                                                                    here
                                                                    or
                                                                    click to upload.
                                                                </h3>
                                                                <span class="fs-7 fw-semibold text-gray-500">Upload up
                                                                    to
                                                                    10
                                                                    files</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Inventory --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Inventory</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 row">
                                        <div class="mb-10 fv-row col-6">
                                            <label class="form-label">SKU Code</label>
                                            <input type="text" name="sku_code" class="form-control mb-2"
                                                placeholder="SKU Number" value="" />
                                            <div class="text-muted fs-7">Enter the product SKU.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-6">
                                            <label class="form-label">MF Code</label>
                                            <input type="text" name="mf_code" class="form-control mb-2"
                                                placeholder="MF Number" value="" />
                                            <div class="text-muted fs-7">Enter the product MF.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-4">
                                            <label class="form-label">Stock</label>
                                            <input type="text" name="stock" class="form-control mb-2"
                                                placeholder="Product Code Number" value="" />
                                            <div class="text-muted fs-7">Enter the product MF.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-4">
                                            <label class="form-label">Stock Availability</label>
                                            <select class="form-select mb-2" name="stock_availability"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="Computers">Available</option>
                                                <option value="Watches">Not Available</option>
                                            </select>
                                            <div class="text-muted fs-7">Enter the product MF.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-4">
                                            <label class="form-label">Barcode</label>
                                            <input type="text" name="barcode" class="form-control mb-2"
                                                placeholder="Barcode Number" value="" />
                                            <div class="text-muted fs-7">
                                                Enter the product barcode number.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_price" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Pricing --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Box Pricing</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 row">
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Box Contains</label>
                                            <input type="number" name="box_contains" id="box_contains"
                                                class="form-control mb-2" placeholder="how much in a box"
                                                value="" />
                                            <div class="text-muted fs-7">How much product in a box.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Box Price</label>
                                            <input type="number" name="box_price" id="box_price"
                                                class="form-control mb-2" placeholder="how much the box price"
                                                value="" />
                                            <div class="text-muted fs-7">How much box price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Box Discount Price</label>
                                            <input type="number" name="box_discount_price" id="box_discount_price"
                                                class="form-control mb-2"
                                                placeholder="how much the box discount price" value="" />
                                            <div class="text-muted fs-7">How much box discount price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Unit Price</label>
                                            <input type="number" name="unit_price" id="unit_price"
                                                class="form-control mb-2" placeholder="how much the unit price"
                                                value="" readonly />
                                            <div class="text-muted fs-7">How much unit price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Unit Discount</label>
                                            <input type="number" name="unit_discount" id="unit_discount"
                                                class="form-control mb-2"
                                                placeholder="how much the unit discount price" value=""
                                                readonly />
                                            <div class="text-muted fs-7">How much unit discount price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <label class="form-label">Box Stock</label>
                                            <input type="number" name="box_stock" id="box_stock"
                                                class="form-control mb-2" placeholder="how much the box stock"
                                                value="" />
                                            <div class="text-muted fs-7">How much box stock. Eg: 50</div>
                                        </div>
                                        <div class="fv-row pt-2 col-4 mt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Is Refurbished
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_package" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Shipping Card Start --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Package Details</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="fv-row row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Length (cm)</label>
                                                        <input type="number" name="length" id="length"
                                                            class="form-control mb-2" placeholder="15"
                                                            value="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Width (cm)</label>
                                                        <input type="number" name="width" id="width"
                                                            class="form-control mb-2" placeholder="10"
                                                            value="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Height (cm)</label>
                                                        <input type="number" name="height" id="height"
                                                            class="form-control mb-2" placeholder="9" value="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <p id="dimensionPreview">Length(0") X Width(0") X Height(0")
                                                        </p> <!-- Dimension preview -->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <img class="img-fluid w-100"
                                                        src="https://i.ibb.co/SsVWMpL/box-size.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Shipping Card End --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_meta" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                {{-- Meta Options --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Meta Options</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10">
                                            <label class="form-label">Meta Tag Title</label>
                                            <input type="text" class="form-control mb-2" name="meta_title"
                                                placeholder="Meta tag name" />

                                            <div class="text-muted fs-7">
                                                Set a meta tag title. Recommended to be simple and precise
                                                keywords.
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <div class="mb-5 fv-row">
                                                <label class="form-label">Meta Tag Description</label>
                                                <div id="meta_editor" name="meta_description">
                                                    {{-- Content --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label">Meta Tag Keywords</label>
                                            <select class="form-select mb-2" name="meta_keyword"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="Computers">Computers</option>
                                                <option value="Watches">Watches</option>
                                                <option value="Headphones">Headphones</option>
                                                <option value="Footwear">Footwear</option>
                                                <option value="Cameras">Cameras</option>
                                                <option value="Shirts">Shirts</option>
                                                <option value="Household">Household</option>
                                                <option value="Handbags">Handbags</option>
                                                <option value="Wines">Wines</option>
                                                <option value="Sandals">Sandals</option>
                                            </select>
                                            <div class="text-muted fs-7">
                                                Set a list of keywords that the product is related to.
                                                Separate the keywords by adding a comma
                                                <code>,</code> between each keyword.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger me-5">
                            Back To Product List
                        </a>
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label"> Save Changes </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const lengthInput = document.getElementById('length');
                const widthInput = document.getElementById('width');
                const heightInput = document.getElementById('height');

                const dimensionPreview = document.getElementById('dimensionPreview');

                function updatePreview() {
                    const length = lengthInput.value || 0;
                    const width = widthInput.value || 0;
                    const height = heightInput.value || 0;

                    dimensionPreview.textContent = `Length(${length}") X Width(${width}") X Height(${height}")`;
                }

                // Attach the event listener to each input field
                lengthInput.addEventListener('input', updatePreview);
                widthInput.addEventListener('input', updatePreview);
                heightInput.addEventListener('input', updatePreview);
            });
        </script>
        <script>
            // Format options
            var optionFormat = function(item) {
                if (!item.id) {
                    return item.text;
                }

                var span = document.createElement('span');
                var color = item.element.getAttribute('data-color');

                var colorCircle = document.createElement('div');
                colorCircle.style.display = 'inline-block';
                colorCircle.style.width = '25px';
                colorCircle.style.height = '25px';
                colorCircle.style.borderRadius = '50%';
                colorCircle.style.backgroundColor = color;
                colorCircle.style.marginRight = '8px';
                colorCircle.style.verticalAlign = 'middle';

                span.appendChild(colorCircle);

                var textNode = document.createTextNode(item.text);
                span.appendChild(textNode);

                return $(span);
            }

            // Init Select2 --- more info: https://select2.org/
            $('#kt_docs_select2_country').select2({
                templateSelection: optionFormat,
                templateResult: optionFormat
            });
        </script>
        <script>
            function calculatePrices() {
                const boxContains = parseFloat(document.getElementById('box_contains').value) || 0;
                const boxPrice = parseFloat(document.getElementById('box_price').value) || 0;
                const boxDiscountPrice = parseFloat(document.getElementById('box_discount_price').value) || 0;

                const unitPrice = boxContains ? (boxPrice / boxContains).toFixed(2) : 0;
                const unitDiscount = boxContains ? (boxDiscountPrice / boxContains).toFixed(2) : 0;

                document.getElementById('unit_price').value = unitPrice;
                document.getElementById('unit_discount').value = unitDiscount;
            }

            document.getElementById('box_contains').addEventListener('input', calculatePrices);
            document.getElementById('box_price').addEventListener('input', calculatePrices);
            document.getElementById('box_discount_price').addEventListener('input', calculatePrices);
        </script>
        <script>
            var myDropzone = new Dropzone("#productmulti_imag", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 10,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });
        </script>
        <script>
            class QuillEditor {
                constructor(elementId, endpoint) {
                    this.elementId = elementId;
                    this.endpoint = endpoint;
                    this.initEditor();
                }

                initEditor() {
                    const Delta = Quill.import('delta');
                    this.quill = new Quill(`#${this.elementId}`, {
                        modules: {
                            toolbar: true
                        },
                        placeholder: 'Type your text here...',
                        theme: 'snow'
                    });

                    // Store accumulated changes
                    this.change = new Delta();
                    this.quill.on('text-change', (delta) => {
                        this.change = this.change.compose(delta);
                    });

                    // Save periodically
                    this.saveInterval = setInterval(() => {
                        if (this.change.length() > 0) {
                            console.log('Saving changes', this.change);
                            // Send partial changes
                            /*
                            $.post(this.endpoint, {
                                partial: JSON.stringify(this.change)
                            });
                            */
                            // Send entire document
                            /*
                            $.post(this.endpoint, {
                                doc: JSON.stringify(this.quill.getContents())
                            });
                            */
                            this.change = new Delta();
                        }
                    }, 5 * 1000);

                    // Check for unsaved data
                    window.addEventListener('beforeunload', (e) => {
                        if (this.change.length() > 0) {
                            e.preventDefault();
                            e.returnValue = 'There are unsaved changes. Are you sure you want to leave?';
                        }
                    });
                }

                destroy() {
                    clearInterval(this.saveInterval);
                    window.removeEventListener('beforeunload', this.handleBeforeUnload);
                }
            }

            // Initialize multiple editors
            const overviewEditor = new QuillEditor('overview_editor', '/save-overview');
            const descriptionEditor = new QuillEditor('description_editor', '/save-description');
            const specificationEditor = new QuillEditor('specification_editor', '/save-specification');
            const metaEditor = new QuillEditor('meta_editor', '/meta-description');
        </script>
    @endpush
</x-admin-app-layout>
