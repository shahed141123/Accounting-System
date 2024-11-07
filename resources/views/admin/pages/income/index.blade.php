<x-admin-app-layout :title="'Income'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Mange Your Income</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">

                                    
                                    <a href="{{ route('admin.income.create') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Create New"> Create
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Sl</th>
                                            {{-- <th width="5%" class="text-center">Image</th> --}}
                                            <th width="20%" class="text-center">Income Reason</th>
                                            <th width="10%" class="text-center">Category</th>
                                            <th width="15%" class="text-center">Sub Category</th>
                                            <th width="10%" class="text-center">Amount</th>
                                            <th width="10%" class="text-center">Account</th>
                                            <th width="10%" class="text-center">Date</th>
                                            <th width="5%" class="text-center">Status</th>
                                            <th width="10%" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($incomes as $income)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                {{-- <td class="text-center">
                                                    <div>
                                                        <img width="50px" src="{{ asset('images/no_image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </td> --}}
                                                <td class="text-center">{{ optional($income)->reason }}</td>
                                                <td class="text-center">{{ optional($income->incomeCategory)->name }}
                                                    [{{ optional($income->incomeCategory)->code }}]</td>
                                                <td class="text-center">{{ optional($income->incomeSubCategory)->name }}
                                                    [{{ optional($income->incomeSubCategory)->code }}]</td>
                                                <td class="text-center">${{ optional($income)->amount }}</td>
                                                <td class="text-center">
                                                    {{ optional($income->incomeTransaction)->cashbookAccount->bank_name }}[{{ optional($income->incomeTransaction)->cashbookAccount->account_number }}]
                                                </td>
                                                <td class="text-center">
                                                    {{ optional($income) ? \Carbon\Carbon::parse($income->date)->format('jS M, Y') : '' }}
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge {{ $income->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $income->status == 'active' ? 'Active' : 'InActive' }}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.income.edit', optional($income)->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    {{-- <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-warning text-white">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a> --}}
                                                    <a href="{{ route('admin.income.destroy', optional($income)->id) }}"
                                                        class="btn btn-sm btn-danger delete">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
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
    </div>
</x-admin-app-layout>
