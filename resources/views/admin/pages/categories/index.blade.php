<x-admin-app-layout>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl">
            <div class="card card-flush">
                <form id="bulk-delete-form" action="{{ route('admin.categories.bulk-delete') }}" method="POST">
                    @csrf
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <button type="submit" id="bulkDelete" class="btn btn-danger" style="display:none;">Delete
                                    Selected</button>
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary me-2">Add
                                Category</a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="my-datatable text-center table table-hover align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-25px">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input metronic_select_all" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_category_table .form-check-input"
                                                    value="1" id="select-all" />
                                            </div>
                                        </th>
                                        <th class="min-w-25px">{{ __('category.Sl') }}</th>
                                        <th class="min-w-150px">{{ __('category.Name') }}</th>
                                        <th class="min-w-150px">{{ __('category.Slug') }}</th>
                                        <th class="min-w-150px">{{ __('category.Status') }}</th>
                                        <th class="min-w-150px">{{ __('category.Parent') }}</th>
                                        <th class="min-w-70px">{{ __('category.Action') }}</th>
                                    </tr>
                                </thead>

                                <tbody class="text-center fw-bold text-gray-600">
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input bulkDelete-checkbox" type="checkbox"
                                                        name="categories[]" value="{{ $category->id }}" />
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
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Actions
                                                    <!-- Action menu SVG -->
                                                </a>
                                            </td>
                                        </tr>
                                        @foreach ($category->children as $child)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input bulkDelete-checkbox"
                                                            type="checkbox" name="categories[]"
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
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Actions
                                                        <!-- Action menu SVG -->
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script></script>
</x-admin-app-layout>
