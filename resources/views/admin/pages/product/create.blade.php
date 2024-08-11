<x-admin-app-layout :title="'Product Add'">
    <style>
        .image-input-empty {
            background-image: url({{ asset('admin/assets/media/svg/files/blank-image.svg') }});
        }

        /* Custom Multi file upload */
        .img-thumb {
            border: 2px solid none;
            border-radius: 3px;
            padding: 1px;
            cursor: pointer;
            width: 70px;
            height: 60px;
            border-radius: 0.475rem;
        }


        .img-thumb-wrapper {
            display: inline-block;
            margin: 1rem 1rem 0 0;
        }


        .remove {
            display: block;
            background: #cf054f;
            border: 1px solid none;
            color: white;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
            padding: 2px 5px;
        }


        .remove:hover {
            background: white;
            color: black;
        }


        .dropzone-field {
            border: 1px dashed #009ef7;
            display: flex;
            flex-wrap: wrap;
            /* Allow multiple images in a row */
            align-items: center;
            border-radius: 4px;
            padding: 10px 5px;
            justify-content: center;
        }


        #files {
            display: none;
        }


        .custom-file-upload {
            border: 0px solid #ccc;
            padding: 6px 12px;
            cursor: pointer;
            background-color: transparent;
        }


        .custom-file-upload i {
            margin-right: 5px;
        }

        /* Custom Multi file upload */
    </style>
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form id="kt_ecommerce_add_product_form" method="post" action="{{ route('admin.product.store') }}"
            enctype="multipart/form-data">
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
                            <x-metronic.select-option id="kt_ecommerce_add_product_status_select"
                                class="form-select mb-2" data-control="select2" data-hide-search="true" name="status"
                                data-placeholder="Select an option">
                                <option></option>
                                <option value="published" selected>Published</option>
                                <option value="draft">Draft</option>
                                <option value="inactive">Inactive</option>
                            </x-metronic.select-option>
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
                                <x-metronic.label for="brand_id" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Brand') }}</x-metronic.label>
                                <x-metronic.select-option id="brand_id" class="form-select mb-2" name="brand_id"
                                    data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </x-metronic.select-option>
                            </div>
                            <div class="fv-row">
                                <x-metronic.label for="category_id" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Category') }}</x-metronic.label>
                                <x-metronic.select-option id="category_id" class="form-control select mb-2"
                                    name="category_id[]" multiple multiselect-search="true"
                                    multiselect-select-all="true" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    {!! $categoriesOptions !!}
                                </x-metronic.select-option>
                            </div>
                            {{-- <div class="fv-row">
                                <x-metronic.label class="form-label">Attribute Id</x-metronic.label>
                                <select class="form-select mb-2" name="attribute_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                    <option></option>
                                    <option :value="old('address')">Computers</option>
                                </select>
                            </div> --}}
                            <div class="fv-row">
                                <x-metronic.label for="color" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Color') }}</x-metronic.label>
                                <x-metronic.select-option class="form-select" placeholder="Color" name="color"
                                    id="color">
                                    <option :value="old('address')">Select Color</option>
                                    <option value="#ff0000" data-color="#ff0000">Red</option>
                                    <option value="#00ff00" data-color="#00ff00">Green</option>
                                    <option value="#0000ff" data-color="#0000ff">Blue</option>
                                    <option value="#ffff00" data-color="#ffff00">Yellow</option>
                                    <option value="#ffa500" data-color="#ffa500">Orange</option>
                                    <option value="#800080" data-color="#800080">Purple</option>
                                    <option value="#ffc0cb" data-color="#ffc0cb">Pink</option>
                                    <option value="#a52a2a" data-color="#a52a2a">Brown</option>
                                    <option value="#000000" data-color="#000000">Black</option>
                                    <option value="#ffffff" data-color="#ffffff">White</option>
                                    <option value="#808080" data-color="#808080">Gray</option>
                                    <option value="#00ffff" data-color="#00ffff">Cyan</option>
                                    <option value="#ff00ff" data-color="#ff00ff">Magenta</option>
                                    <option value="#00ff00" data-color="#00ff00">Lime</option>
                                    <option value="#800000" data-color="#800000">Maroon</option>
                                    <option value="#000080" data-color="#000080">Navy</option>
                                    <option value="#808000" data-color="#808000">Olive</option>
                                    <option value="#008080" data-color="#008080">Teal</option>
                                    <option value="#c0c0c0" data-color="#c0c0c0">Silver</option>
                                    <option value="#ffd700" data-color="#ffd700">Gold</option>
                                    <!-- Add more options with respective colors -->
                                </x-metronic.select-option>
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
                                            <x-metronic.label class="form-label">Product Name</x-metronic.label>
                                            <x-metronic.input type="text" name="name" class="form-control mb-2"
                                                placeholder="Product name recommended" :value="old('name')">
                                            </x-metronic.input>
                                            <div class="text-muted fs-7">
                                                A product name is and recommended to be unique.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Tags</x-metronic.label>
                                            <input class="form-control" name="tags" value=""
                                                id="product_Tags" :value="old('tags')" />
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Short Description</x-metronic.label>
                                            <x-metronic.textarea id="short_description" name="short_description"
                                                placeholder="Add Product Short Description" class="form-control mb-2"
                                                cols="30" rows="3"></x-metronic.textarea>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product Overview</x-metronic.label>
                                            <textarea name="product_overview" class="ckeditor">{!! old('product_overview') !!}</textarea>
                                            <div class="text-muted fs-7">
                                                Add product overview here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product Description</x-metronic.label>
                                            <textarea name="product_description" class="ckeditor">{!! old('product_description') !!}</textarea>
                                            <div class="text-muted fs-7">
                                                Add product description here.
                                            </div>
                                        </div>
                                        <div class="mb-5 fv-row">
                                            <x-metronic.label class="form-label">Product
                                                Specification</x-metronic.label>
                                            <textarea name="product_specification" class="ckeditor">{!! old('product_specification') !!}</textarea>
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
                                                <x-metronic.label for="" class="form-label">Set the product
                                                    thumbnail image. Only *.png, *.jpg and *.jpeg image
                                                    files are accepted</x-metronic.label>
                                                <div class="image-input image-input-empty" data-kt-image-input="true"
                                                    style="width: auto;
                                                    background-size: contain;
                                                    border: 1px solid #009ae5;">
                                                    <div class="image-input-wrapper w-100px h-70px"></div>

                                                    <label
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>

                                                        <input type="file" name="thumbnail"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                    </label>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        data-bs-dismiss="click" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            {{-- Product Mutli Image --}}
                                            <div class="col-8">
                                                <div class="fv-row pt-5">
                                                    <x-metronic.label for="" class="form-label">Add the
                                                        product multi image</x-metronic.label>
                                                    <div class="dropzone-field">
                                                        <label for="files" class="custom-file-upload">
                                                            <div class="d-flex align-items-center">
                                                                <p class="mb-0"><i
                                                                        class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                </p>
                                                                <h5 class="mb-0">Drop files here or click to upload.
                                                                    <br>
                                                                    <span class="text-muted"
                                                                        style="font-size: 10px">Upload 10 File</span>
                                                                </h5>
                                                            </div>
                                                        </label>
                                                        <input type="file" id="files" name="multi_images[]"
                                                            multiple class="form-control" style="display: none;"
                                                            onchange="console.log(this.selected.value)" />
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
                                            <x-metronic.label class="form-label">SKU Code</x-metronic.label>
                                            <x-metronic.input type="text" name="sku_code"
                                                class="form-control mb-2" placeholder="SKU Number"
                                                :value="old('sku_code')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">Enter the product SKU.</div>
                                        </div>
                                        <div class="mb-10 fv-row col-6">
                                            <x-metronic.label class="form-label">MF Code</x-metronic.label>
                                            <x-metronic.input type="text" name="mf_code" class="form-control mb-2"
                                                placeholder="MF Number" :value="old('mf_code')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">Enter the product MF.</div>
                                        </div>

                                        <div class="mb-10 fv-row col-12">
                                            <x-metronic.label class="form-label">Barcode</x-metronic.label>
                                            <x-metronic.input type="text" name="barcode" class="form-control mb-2"
                                                placeholder="Barcode Number" :value="old('barcode')"></x-metronic.file-input>
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
                                            <x-metronic.label class="form-label">Box Contains</x-metronic.label>
                                            <x-metronic.input type="number" name="box_contains" id="box_contains"
                                                class="form-control mb-2" placeholder="how much in a box"
                                                :value="old('box_contains')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much product in a box.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Box Price</x-metronic.label>
                                            <x-metronic.input type="number" name="box_price" id="box_price"
                                                class="form-control mb-2" placeholder="how much the box price"
                                                :value="old('box_price')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much box price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Box Discount Price</x-metronic.label>
                                            <x-metronic.input type="number" name="box_discount_price"
                                                id="box_discount_price" class="form-control mb-2"
                                                placeholder="how much the box discount price"
                                                :value="old('box_discount_price')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much box discount price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Unit Price</x-metronic.label>
                                            <x-metronic.input type="number" name="unit_price" id="unit_price"
                                                class="form-control mb-2" placeholder="how much the unit price"
                                                :value="old('unit_price')" readonly></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much unit price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Unit Discount</x-metronic.label>
                                            <x-metronic.input type="number" name="unit_discount" id="unit_discount"
                                                class="form-control mb-2"
                                                placeholder="how much the unit discount price" :value="old('unit_discount')"
                                                readonly></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much unit discount price.</div>
                                        </div>
                                        <div class="mb-5 fv-row col-4">
                                            <x-metronic.label class="form-label">Box Stock</x-metronic.label>
                                            <x-metronic.input type="number" name="box_stock" id="box_stock"
                                                class="form-control mb-2" placeholder="how much the box stock"
                                                :value="old('box_stock')"></x-metronic.file-input>
                                                <div class="text-muted fs-7">How much box stock. Eg: 50</div>
                                        </div>
                                        <div class="fv-row col-4 mt-10">
                                            <div class="form-check">
                                                <input class="form-check-input" name="is_refurbished" type="checkbox"
                                                    :value="old('address')" id="flexCheckDefault" />
                                                <x-metronic.label class="form-check-label" for="flexCheckDefault">
                                                    Is Refurbished
                                                </x-metronic.label>
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
                                                        <x-metronic.label class="form-label">Length
                                                            (cm)</x-metronic.label>
                                                        <x-metronic.input type="number" name="length"
                                                            id="length" class="form-control mb-2" placeholder="15"
                                                            :value="old('length')"></x-metronic.file-input>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <x-metronic.label class="form-label">Width
                                                            (cm)</x-metronic.label>
                                                        <x-metronic.input type="number" name="width"
                                                            id="width" class="form-control mb-2" placeholder="10"
                                                            :value="old('width')"></x-metronic.file-input>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <x-metronic.label class="form-label">Height
                                                            (cm)</x-metronic.label>
                                                        <x-metronic.input type="number" name="height"
                                                            id="height" class="form-control mb-2" placeholder="9"
                                                            :value="old('height')"></x-metronic.file-input>
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
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Product Meta
                                                    Title</x-metronic.label>
                                                <input class="form-control" name="meta_title" type="text"
                                                    placeholder="Meta tag name" id="meta_title"
                                                    :value="old('meta_title')" />
                                            </div>
                                            <div class="text-muted fs-7">
                                                Add Product Meta Title.
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Meta
                                                    Description</x-metronic.label>
                                                <textarea name="meta_description" class="ckeditor">{!! old('meta_description') !!}</textarea>
                                                <div class="text-muted fs-7">
                                                    Add Meta Meta details.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-5 fv-row">
                                                <x-metronic.label class="form-label">Meta Tag
                                                    Keywords</x-metronic.label>
                                                <input class="form-control" name="meta_keywords"
                                                    placeholder="Meta tag keywords" id="product_meta_keyword"
                                                    :value="old('meta_keywords')" />
                                                <div class="text-muted fs-7">
                                                    Add product Meta tag keywords.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-10">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger me-5">
                            Back To Product List
                        </a>
                        {{-- <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label"> Save Changes </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button> --}}
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label"> Save Changes </span>
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
                // The DOM elements you wish to replace with Tagify
                var input1 = document.querySelector("#product_Tags");
                var input2 = document.querySelector("#product_meta_tags");
                var input3 = document.querySelector("#product_meta_keyword");

                // Initialize Tagify components on the above inputs
                new Tagify(input1);
                new Tagify(input2);
                new Tagify(input3);
            });



            // Product dimension box
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
            // Color Select Options
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
            // Product Pricing
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
            // Product Multiimage Submit
            var uploadedDocumentMap = {}; // Assuming you have this variable defined somewhere

            var myDropzone = new Dropzone("#product_multiimage", {
                url: "{{ route('admin.product.store') }}",
                paramName: "multi_image", // The name that will be used to transfer the file
                uploadMultiple: true,
                parallelUploads: 10,
                maxFiles: 10,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    console.log(file);
                    $('#kt_ecommerce_add_product_form').append(
                        '<input type="hidden" name="document[ value="{{ old('document') }}"]" value="' + file
                        .file + '">');
                    done();
                },
                method: "post",
            });

            document.getElementById('kt_ecommerce_add_product_form').addEventListener('submit', function(event) {
                var formData = new FormData(this);
                console.log(formData);
            });
            // textEditor
            class CKEditorInitializer {
                constructor(className) {
                    this.className = className;
                }

                initialize() {
                    const elements = document.querySelectorAll(this.className);
                    elements.forEach(element => {
                        ClassicEditor
                            .create(element)
                            .then(editor => {
                                console.log('CKEditor initialized:', editor);
                            })
                            .catch(error => {
                                console.error('CKEditor initialization error:', error);
                            });
                    });
                }
            }

            // Example usage:
            const ckEditorInitializer = new CKEditorInitializer('.ckeditor');
            ckEditorInitializer.initialize();
        </script>
    @endpush
</x-admin-app-layout>
