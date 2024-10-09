<x-admin-app-layout :title="'Income Sub Category'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Manage Your Income Sub Category</h4>
                                </div>
                                <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#addCategoryModal">
                                    <i class="fa-solid fa-plus pe-2" aria-hidden="true"></i>
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-striped datatable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategorys as $subcategory)
                                        <tr>
                                            <td>{{ $subcategory->name }}</td>
                                            <td>{{ $subcategory->code }}</td>
                                            <td>{{ $subcategory->incomeCategory->name }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ $subcategory->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $subcategory->status == 'active' ? 'Active' : 'InActive' }}</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editCategoryModal{{ $subcategory->id }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-warning text-white"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editCategoryModal{{ $subcategory->id }}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.income-subcategory.destroy', $subcategory->id) }}"
                                                    class="btn btn-sm btn-danger delete">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                                <div class="modal fade" id="editCategoryModal{{ $subcategory->id }}"
                                                    tabindex="-1" aria-labelledby="editCategoryModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-dark text-white">
                                                                <h5 class="modal-title" id="editCategoryModalLabel">Edit
                                                                    Category</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" enctype="multipart/form-data"
                                                                    action="{{ route('admin.income-subcategory.update', $subcategory->id) }}">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <x-admin.label for="cat_id"
                                                                            class="form-label">Category
                                                                            Name</x-admin.label>
                                                                        <x-admin.select-option
                                                                            class="form-select form-select-solid" data-allow-clear="true"
                                                                            id="cat_id" name="cat_id">
                                                                            <option value="">-- Select Category --</option>
                                                                            @foreach ($categorys as $category)
                                                                                <option value="{{ $category->id }}"
                                                                                    @selected($category->id == $subcategory->cat_id)>
                                                                                    {{ $category->name }}</option>
                                                                            @endforeach
                                                                        </x-admin.select-option>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <x-admin.label for="name"
                                                                            class="form-label">Name</x-admin.label>
                                                                        <x-admin.input type="text"
                                                                            class="form-control form-control-solid"
                                                                            :value="old('name', $subcategory->name)" id="name"
                                                                            name="name" required></x-admin.input>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <x-admin.label for="note"
                                                                            class="form-label">Note</x-admin.label>
                                                                        {{-- <textarea class="form-control form-control-solid" id="note" name="note" rows="3">{{ old('note',$subcategory->note) }}</textarea> --}}
                                                                        <x-admin.textarea id="note" name="note"
                                                                            :rows="2">{{ old('note', $subcategory->note) }}</x-admin.textarea>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <x-admin.label for="status"
                                                                            class="form-label">Status</x-admin.label>
                                                                        <x-admin.select-option
                                                                            class="form-select form-select-solid"
                                                                            id="status" name="status">
                                                                            <option value="active"
                                                                                @selected($subcategory->status == 'active')>Active
                                                                            </option>
                                                                            <option value="inactive"
                                                                                @selected($subcategory->status == 'inactive')>Inactive
                                                                            </option>
                                                                        </x-admin.select-option>
                                                                    </div>
                                                                    <x-admin.button type="submit"
                                                                        class="btn btn-white">Edit
                                                                        Category</x-admin.button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Entry Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Sub Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.income-subcategory.store') }}">
                        @csrf
                        <div class="mb-3">
                            <x-admin.label for="cat_id" class="form-label">Category Name</x-admin.label>
                            <x-admin.select-option class="form-select form-select-solid" id="cat_id"
                                name="cat_id">
                                <option value="">-- Select Category --</option> <!-- Default Option -->
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </x-admin.select-option>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="name" class="form-label">Name</x-admin.label>
                            <x-admin.input type="text" class="form-control form-control-solid" :value="old('name')"
                                id="name" name="name" required></x-admin.input>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="note" class="form-label">Note</x-admin.label>
                            <textarea class="form-control form-control-solid" id="note" name="note"></textarea>
                        </div>
                        <div class="mb-3">
                            <x-admin.label for="status" class="form-label">Status</x-admin.label>
                            <x-admin.select-option class="form-select form-select-solid" id="status"
                                name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </x-admin.select-option>
                        </div>
                        <x-admin.button type="submit" class="primary">Add Sub Category</x-admin.button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
