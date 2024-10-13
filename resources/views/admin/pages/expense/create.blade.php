<x-admin-app-layout>
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control form-control-solid" id="name" name="name"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="reason" class="form-label">Reason</label>
                        <input type="text" class="form-control form-control-solid" id="reason" name="reason"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control form-control-solid" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea class="form-control form-control-solid" id="note" name="note"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select form-select-solid" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" class="form-control form-control-solid" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="cat_id" class="form-label">Category</label>
                        <select class="form-select form-select-solid" id="cat_id" name="cat_id">
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sub_cat_id" class="form-label">Sub Category</label>
                        <select class="form-select form-select-solid" id="sub_cat_id" name="sub_cat_id">
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="transaction_id" class="form-label">Transaction</label>
                        <select class="form-select form-select-solid" id="transaction_id" name="transaction_id">
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                            <option value="">Choosen</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-white">Add Expense</button>
                </form>
            </div>
            <!-- /.row (main row) -->
        </div>
    </div>
</x-admin-app-layout>
