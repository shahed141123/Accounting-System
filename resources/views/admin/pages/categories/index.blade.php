<x-admin-app-layout>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Category" />
                        </div>
                    </div>

                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add
                            Category</a>

                    </div>

                </div>


                <div class="card-body pt-0">
                    <div class="table-responsive">

                            <table class="table table-hover align-middle table-row-dashed fs-6 gy-5" id="kt_category_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_category_table .form-check-input"
                                                    value="1" id="select-all" />
                                            </div>
                                        </th>
                                        <th class="min-w-150px">{{ __('category.Sl') }}</th>
                                        <th class="min-w-150px">{{ __('category.Name') }}</th>
                                        <th class="min-w-150px">{{ __('category.Slug') }}</th>
                                        <th class="min-w-150px">{{ __('category.Status') }}</th>
                                        <th class="min-w-150px">{{ __('category.Parent') }}</th>
                                        <th class="text-end min-w-70px">{{ __('category.Action') }}</th>
                                    </tr>
                                </thead>

                                <tbody class="fw-bold text-gray-600">
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input category-checkbox" type="checkbox" name="categories[]"
                                                        value="{{ $category->id }}" />
                                                </div>
                                            </td>

                                            <td>
                                                <span class="fw-bolder">{{ $loop->iteration }}</span>
                                            </td>
                                            <td>
                                                <span class="fw-bolder">{{ $category->name }}</span>
                                            </td>
                                            <td>
                                                <span class="fw-bolder">{{ $category->slug }}</span>
                                            </td>
                                            <td>
                                                <div
                                                    class="badge {{ $category->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                                    {{ $category->status == 1 ? 'Active' : 'InActive' }}
                                                </div>
                                            </td>
                                            <td>
                                                <span class="fw-bolder">
                                                    {{ $category->parent_id ? $category->parent->name : 'N/A' }}</span>
                                            </td>

                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <!-- Action menu SVG -->
                                                </a>
                                            </td>
                                        </tr>
                                        @foreach ($category->children as $child)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input category-checkbox" type="checkbox" name="categories[]"
                                                            value="{{ $child->id }}" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-bolder">
                                                        {{ $loop->parent->iteration }}.{{ $loop->iteration }}</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bolder"> -- {{ $child->name }}</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bolder">{{ $child->slug }}</span>
                                                </td>
                                                <td>
                                                    <div
                                                        class="badge {{ $child->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                                        {{ $child->status == 1 ? 'Active' : 'InActive' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-bolder">
                                                        {{ $child->parent->name ?? 'N/A' }}
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <!-- Action menu SVG -->
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-danger mt-3">Delete Selected</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script></script>
</x-admin-app-layout>
