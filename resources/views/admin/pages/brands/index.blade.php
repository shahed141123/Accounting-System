<x-admin-app-layout :title="'Brands List'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <a href="{{ route('admin.brands.create') }}" class="btn btn-light-primary">

                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>
                    Add Brands
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <table class="brandsDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">

                <thead>

                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                </thead>


                <tbody class="fw-bold text-gray-600">

                </tbody>

            </table>

        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                var table = $('.brandsDT').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.brands.index') }}",
                    columns: [{
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + 1; // Display serial number starting from 1
                            },
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'logo',
                            name: 'logo',
                            render: function(data, type, row) {
                                return `<img src="/storage/${data}" alt="${row.name}" width="50">`;
                            }
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            render: function(data, type, row) {
                                return `
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input status-toggle" type="checkbox" id="status_toggle_${row.id}" ${data == 'active' ? 'checked' : ''} data-id="${row.id}" />
                        </div>
                    `;
                            }
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });

                $(document).on('change', '.status-toggle', function() {
                    const id = $(this).data('id');
                    const route = "{{ route('admin.brands.toggle-status', ':id') }}".replace(':id', id);
                    toggleStatus(route, id);
                });

                function toggleStatus(route, id) {
                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                alert('Status updated successfully!');
                                table.ajax.reload(null, false); // Reload the DataTable
                            } else {
                                alert('Failed to update status.');
                            }
                        },
                        error: function() {
                            alert('An error occurred while updating the status.');
                        }
                    });
                }
            });
        </script>
    @endpush
</x-admin-app-layout>
