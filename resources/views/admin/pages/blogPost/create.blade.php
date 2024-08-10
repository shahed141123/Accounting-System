<x-admin-app-layout :title="'Blog Add'">
    <style>
        .image-input-placeholder {
            background-image: url("https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/files/blank-image.svg");
        }
    </style>
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
            action="{{ route('admin.blog-post.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                {{-- Media Card Start --}}
                <div class="card card-flush">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Blog Image</h2>
                        </div>
                    </div>
                    <div class="card-body text-center pt-0">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="fa-solid fa-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="image_remove" />
                            </label>
                        </div>
                        <div class="text-muted fs-7">
                            Set the image. Only *.png, *.jpg and *.jpeg image
                            files are accepted
                        </div>
                        {{-- Product Mutli Image --}}
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3 mt-4"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="fa-solid fa-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="file" name="banner_image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="banner_image_remove" />
                            </label>
                        </div>
                        <div class="text-muted fs-7">
                            Set the blog banner image
                        </div>
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3 mt-4"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="fa-solid fa-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="logo_remove" />
                            </label>
                        </div>
                        <div class="text-muted fs-7">
                            Set the blog logo
                        </div>
                    </div>
                </div>
                {{-- Media Card End --}}
                {{-- Status Card Start --}}
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Status</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="fv-row">
                            <div class="mb-10 mt-5">
                                <div class="form-check">
                                    <x-metronic.input class="form-check-input" type="checkbox" name="featured"
                                        value="1" id="flexCheckDefault" :value="old('featured')"></x-metronic.input>
                                    <x-metronic.label class="form-check-label" for="flexCheckDefault">
                                        {{ __('Is Feature') }}
                                    </x-metronic.label>
                                </div>
                            </div>
                        </div>
                        <div class="fv-row">
                            <div class="mb-5">
                                <x-metronic.label class="form-label">{{ __('Status') }}</x-metronic.label>
                                <x-metronic.select-option class="form-select mb-2" name="status" id="status"
                                    data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                    <option value="unpublish">UnPublish</option>
                                </x-metronic.select-option>
                            </div>
                        </div>
                        <div class="fv-row">
                            <div class="mb-5">
                                <x-metronic.label class="form-label">{{ __('Blog Type') }}</x-metronic.label>
                                <x-metronic.select-option class="form-select mb-2" name="type" id="type"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    <option value="blog">Blog</option>
                                    <option value="news">News</option>
                                    <option value="promotional_article">Promotional Article</option>
                                    {{-- <option value="1">Footwear</option>
                                    <option value="1">Cameras</option>
                                    <option value="1">Shirts</option> --}}
                                </x-metronic.select-option>
                            </div>
                        </div>
                        <div class="fv-row">
                            <div class="mb-5">
                                <x-metronic.label class="form-label">{{ __('Badge') }}</x-metronic.label>
                                <x-metronic.input type="text" name="badge" class="form-control mb-2"
                                    placeholder="Set the blogs badge" :value="old('badge')"></x-metronic.input>
                            </div>
                            <div class="">
                                <x-metronic.label class="form-label">{{ __('Additional Url') }}</x-metronic.label>
                                <x-metronic.input type="url" name="additional_url" class="form-control mb-2"
                                    placeholder="Set the blogs additional url" :value="old('additional_url')"></x-metronic.input>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Status Card End --}}
            </div>
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        {{-- General Info --}}
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Blog Info</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-5 fv-row">
                                    <x-metronic.label class="form-label">{{ __('Blog Title') }}</x-metronic.label>
                                    <x-metronic.input type="text" name="title" class="form-control mb-2"
                                        placeholder="Set the blog title" :value="old('title')"></x-metronic.input>
                                    <div class="text-muted fs-7">
                                        A blog title is recommended.
                                    </div>
                                </div>
                                <div class="mb-5 fv-row">
                                    <x-metronic.label class="form-label">{{ __('Blog Header') }}</x-metronic.label>
                                    <x-metronic.textarea id="header" :value="old('header')" name="header"
                                        placeholder="Add Blog Header" class="form-control mb-2" cols="30"
                                        rows="3">{{ old('banner_image') }}</x-metronic.textarea>
                                </div>
                                <div class="mb-5 fv-row">
                                    <x-metronic.label class="form-label">{{ __('Address') }}</x-metronic.label>
                                    <x-metronic.textarea id="address" :value="old('address')" name="address"
                                        placeholder="Add Blog Address" class="form-control mb-2" cols="30"
                                        rows="3">{{ old('banner_image') }}</x-metronic.textarea>
                                </div>
                                <div class="mb-5 fv-row">
                                    <x-metronic.label
                                        class="form-label">{{ __('Blog Short Description') }}</x-metronic.label>
                                    <div id="overview_editor" name="short_description">
                                        {{-- Content --}}
                                    </div>
                                    <div class="text-muted fs-7">
                                        Add blog short description.
                                    </div>
                                </div>
                                <div class="mb-5 fv-row">
                                    <x-metronic.label class="form-label">Blog Long Description</x-metronic.label>
                                    <div id="description_editor" name="long_description">
                                        {{-- Content --}}
                                    </div>
                                    <div class="text-muted fs-7">
                                        Add blog long description.
                                    </div>
                                </div>
                                <div class="mb-5 fv-row">
                                    <x-metronic.label class="form-label">Blog Footer</x-metronic.label>
                                    <div id="specification_editor" name="footer">
                                        {{-- Content --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Category --}}
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Blog Category</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="fv-row">
                                    <x-metronic.label class="form-label">Category Id</x-metronic.label>
                                    <x-metronic.select-option class="form-select mb-2" name="category_id[]"
                                        data-control="select2" data-placeholder="Select an option"
                                        data-allow-clear="true" id="category_id">
                                        <option></option>
                                        @foreach ($blogCategories as $blogcategory)
                                            <option value="{{ $blogcategory->id }}">{{ $blogcategory->name }}
                                            </option>
                                        @endforeach
                                    </x-metronic.select-option>
                                </div>
                                <div class="fv-row">
                                    <x-metronic.label class="form-label">Tag Id</x-metronic.label>
                                    <x-metronic.select-option class="form-select mb-2" name="tag_id[]" id="tag_id"
                                        data-control="select2" data-placeholder="Select an option"
                                        data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        @foreach ($blogTags as $blogtag)
                                            <option value="{{ $blogtag->id }}">{{ $blogtag->name }}</option>
                                        @endforeach
                                    </x-metronic.select-option>
                                </div>
                                <div class="fv-row">
                                    <div class="mb-5">
                                        <x-metronic.label class="form-label">Blog Author</x-metronic.label>
                                        <x-metronic.input type="text" name="author" class="form-control mb-2"
                                            placeholder="Set the blog author"></x-metronic.input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.blog-post.index') }}" class="btn btn-danger me-5">
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
        </form>
    </div>
    @push('scripts')
        {{-- Tagify --}}
        <script>
            // The DOM elements you wish to replace with Tagify
            var input1 = document.querySelector("#kt_tagify_1");
            var input2 = document.querySelector("#kt_tagify_2");

            // Initialize Tagify components on the above inputs
            new Tagify(input1);
            new Tagify(input2);
        </script>
        {{-- Tagify ENd --}}
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
