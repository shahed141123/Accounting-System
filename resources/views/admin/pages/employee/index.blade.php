<x-admin-app-layout :title="'Accounts List'">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <div class="app-content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-none">
                        <div class="card-header p-3 bg-custom text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Employee List</h4>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    {{-- <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Export To Excel">
                                        <i class="fa-solid fa-file-csv"></i>
                                    </button> --}}
                                    {{-- <a href="{{ route('admin.assets.pdf') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Download PDF">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                    <button type="button" class="btn btn-outline-light toltip"
                                        data-tooltip="Print Table">
                                        <i class="fa-solid fa-print"></i>
                                        <span class="tooltiptext">Print</span>
                                    </button> --}}
                                    <a href="{{ route('admin.employee.create') }}" class="btn btn-outline-light toltip"
                                        data-tooltip="Create New"> Create
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            {{-- <div class="d-flex justify-content-between align-items-center mb-3 bg-light p-3">
                                <h6>Filter Assets (From-To)</h6>
                                <div>
                                    <input class="form-control" name='range' id='cal' />
                                </div>
                            </div> --}}
                            <div class="table-responsive p-3 pt-1">
                                <table class="table table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Sl') }}</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Emp Id') }}</th>
                                            <th>{{ __('Department') }}</th>
                                            <th>{{ __('Designation') }}</th>
                                            <th>{{ __('Total Salary') }}</th>
                                            <th>{{ __('Contact Number') }}</th>
                                            <th>{{ __('Birth_Date') }}</th>
                                            <th>{{ __('Join Date') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th class="text-right">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $index => $employee)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if ($employee->image)
                                                        <a href="#"
                                                            onclick="previewModal('{{ $employee->image }}')">
                                                            <img src="{{ $employee->image }}"
                                                                class="rounded preview-sm" />
                                                        </a>
                                                    @else
                                                        <div class="bg-secondary rounded no-preview-sm">
                                                            <small>{{ __('common.no_preview') }}</small>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $employee->name }}
                                                </td>
                                                <td>{{ $employee->emp_id }}</td>
                                                <td>{{ optional($employee->department)->name ?? 'N/A' }}</td>
                                                <td>{{ $employee->designation }}</td>
                                                <td>{{ $employee->totalSalary() }}</td>
                                                <td>{{ $employee->mobile_number }}</td>
                                                <td>{{ \Carbon\Carbon::parse($employee->birth_date)->format('d M, Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($employee->joining_date)->format('d M, Y') }}
                                                </td>
                                                <td>
                                                    @if ($employee->status == 'active')
                                                        <span class="badge bg-success">{{ __('Active') }}</span>
                                                    @else
                                                        <span class="badge bg-danger">{{ __('InActive') }}</span>
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    {{-- @can('employee-view')
                                                        <a href="{{ route('employees.show', ['slug' => $employee->slug]) }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    @endcan --}}
                                                    @can('employee-edit')
                                                        <a href="{{ route('employees.edit', ['slug' => $employee->slug]) }}"
                                                            class="btn btn-info btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    {{-- @can('employee-delete') --}}
                                                        <a href="{{ route('admin.employee.destroy', optional($employee)->id) }}"
                                                            class="btn btn-sm btn-danger delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    {{-- @endcan --}}
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
    @push('scripts')
        <script>
            // Multi Select Date Picker
            var dates = [];
            $(document).ready(function() {
                $("#cal").daterangepicker();
                $("#cal").on("apply.daterangepicker", function(e, picker) {
                    e.preventDefault();
                    const obj = {
                        key: dates.length + 1,
                        start: picker.startDate.format("MM/DD/YYYY"),
                        end: picker.endDate.format("MM/DD/YYYY"),
                    };
                    dates.push(obj);
                    showDates();
                });
                $(".remove").on("click", function() {
                    removeDate($(this).attr("key"));
                });
            });

            function showDates() {
                $("#ranges").html("");
                $.each(dates, function() {
                    const el =
                        "<li>" +
                        this.start +
                        "-" +
                        this.end +
                        "<button class='remove' onClick='removeDate(" +
                        this.key +
                        ")'>-</button></li>";
                    $("#ranges").append(el);
                });
            }

            function removeDate(i) {
                dates = dates.filter(function(o) {
                    return o.key !== i;
                });
                showDates();
            }
        </script>
    @endpush
</x-admin-app-layout>
