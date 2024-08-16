<x-admin-app-layout :title="'Contact Message List'">
    <div class="card">
    <div class="card-header bg-info align-items-center d-flex justify-content-between">
        <div>
            <h1 class="mb-0 text-center w-100 text-white">Manage Your Blog Category</h1>
        </div>
        <div>
            <a href="#" class="btn btn-light-primary rounded-2">
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
                Add Category
            </a>
        </div>
    </div>
    <div class="card-body py-0">
        <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
            <thead class="bg-light-danger">
                <tr class="fw-semibold fs-6 text-gray-800">
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-fluid">
            <div class="card card-flush">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="kt_datatable_example table table-hover align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    {{-- <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_message_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th> --}}
                                    <th width="5%" class="text-center">Sl</th>
                                    <th width="15%" class="text-center">Name</th>
                                    <th width="20%" class="text-center">Email</th>
                                    <th width="5%" class="text-center">Message</th>
                                    <th width="10%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center fw-bold text-gray-600">
                                @forelse ($contacts as $contact)
                                    <tr>
                                        {{-- <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td> --}}
                                        <td>
                                            <span class="fw-bolder"> {{ $loop->iteration }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->name }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->email }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->message }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    {{-- <div class="menu-item px-3">
                                                    <a href="{{ route('admin.contact.show', $contact->id) }}"
                                                        class="menu-link px-3">Show</a>
                                                </div> --}}
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.contacts.edit', $contact->id) }}"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.contacts.destroy', $contact->id) }}"
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
            </div>
        </div>
    </div>
</x-admin-app-layout>
