<x-admin-app-layout :title="'Users List'">
    <div class="card">
        <div class="card-header border-0 pt-6 bg-primary">
            <div>
                <div class="card-title text-white">Manage Your Users</div>
            </div>
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary rounded-1">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                    transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        Add User
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body py-4">
            <table class="table my-datatable align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="ps-3">SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Role</th> --}}
                        <th>Show User</th>
                        <th>Status</th>
                        <th class="text-end min-w-100px pe-5">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="javascript:void(0)">
                                        <div class="symbol-label" style="background-color: {{ $user->profile_image_url ? 'transparent' : '#d3d3d3' }};">
                                            @if ($user->profile_image_url)
                                                <img src="{{ asset('storage/' . $user->profile_image_url) }}" alt="{{ $user->name }}" class="w-100" />
                                            @else
                                                <span class="text-gray-800 text-hover-primary mb-1">
                                                    {{ strtoupper(substr($user->first_name, 0, 1)) }}{{ strtoupper(substr($user->last_name, 0, 1)) }}
                                                </span>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <a href="javascript:void(0)"
                                        class="text-gray-800 text-hover-primary mb-1">{{ $user->first_name }} {{ $user->last_name }}</a>
                                </div>
                            </td>
                            <td>
                                <span>{{ $user->email }}</span>
                            </td>

                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i> Show</button>
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input status-toggle w-60px" type="checkbox"
                                        id="status_toggle_1" checked="" data-id="1">
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.user.show', $user->id) }}"
                                                class="menu-link px-3">Show
                                                Details</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="menu-link px-3">Edit</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.user.destroy', $user->id) }}"
                                                class="menu-link px-3 delete">Delete</a>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>
