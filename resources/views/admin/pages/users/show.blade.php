<x-admin-app-layout :title="'User Details of ' . $user->name">

    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <div class="card mb-5 mb-xl-8">
                <div class="card-body">
                    <div class="d-flex flex-center flex-column py-5">

                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="{{ asset('admin/assets/media/svg/avatars/blank-dark.svg') }}" alt="image" />
                        </div>
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $user->name }}</a>
                        <div class="mb-9">
                            <div class="badge badge-lg badge-light-primary d-inline">Roles</div>
                        </div>
                        <div class="fw-bolder mb-3">{{ $user->first_name }} {{ $user->last_name }}
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true"
                                data-bs-content="Number of support tickets assigned, closed and pending this week."></i>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="collapse show" id="user_collapse_details_{{ $user->id }}">
                        <div class="pb-5 fs-6">
                            {{-- <div class="fw-bolder mt-5">Account ID</div>
                            <div class="text-gray-600">ID-45453423</div> --}}
                            <div class="fw-bolder mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $user->email ?? "Not Available" }}</a>
                            </div>
                            <div class="fw-bolder mt-5">Address</div>
                            <div class="text-gray-600">{{ $user->address ?? "Not Available" }}</div>
                            <div class="fw-bolder mt-5">Language</div>
                            <div class="text-gray-600">English</div>
                            <div class="fw-bolder mt-5">Account Created At</div>
                            <div class="text-gray-600">{{ $user->created_at->format('d M Y, g:i a') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-3 mx-1 active" data-bs-toggle="tab"
                        href="#kt_user_view_overview_tab">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-3 mx-1" data-kt-countup-tabs="true" data-bs-toggle="tab"
                        href="#kt_user_view_overview_security">Security</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-active-primary pb-3 mx-1" data-bs-toggle="tab"
                        href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                </li> --}}
                <li class="nav-item ms-auto">

                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions

                        <span class="svg-icon svg-icon-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                        data-kt-menu="true">
                        <div class="menu-item px-5">
                            <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                        </div>
                        <div class="menu-item px-5">
                            <a href="javascript:void(0)" class="menu-link px-5">Reports</a>
                        </div>
                        <div class="menu-item px-5 my-1">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="menu-link px-5">Account
                                Settings</a>
                        </div>
                        <div class="menu-item px-5">
                            <a href="{{ route('admin.user.destroy', $user->id) }}"
                                class="menu-link text-danger px-5 delete">Delete This User</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                    @include('admin.pages.users.partials.overview')
                </div>
                <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">

                    @include('admin.pages.users.partials.security')
                </div>
                {{-- <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">

                    @include('admin.pages.users.partials.activity-logs')
                </div> --}}
            </div>
        </div>
    </div>




    <div class="modal fade metronic_modal" id="update_email_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update Email</h2>

                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-modal-action="close">

                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>

                    </div>

                </div>


                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                        @csrf
                        @method('PATCH')

                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">


                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                        fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>



                            <div class="d-flex flex-stack flex-grow-1">

                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-700">Please note that a valid email address is required
                                        to complete the email verification.</div>
                                </div>

                            </div>

                        </div>


                        <div class="fv-row mb-7">

                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">Email Address</span>
                            </label>


                            <input class="form-control form-control-solid" type="email"
                                placeholder="example@domain.com" name="email"
                                value="{{ old('email', $user->email) }}" />
                            <div class="invalid-feedback">
                                Please input valid Email.
                            </div>

                        </div>


                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>



    <div class="modal fade" id="update_password_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update User Password</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary btn-close" data-kt-modal-action="close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>

                    </div>

                </div>

                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}"
                        novalidate>
                        @csrf
                        @method('PATCH')

                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                placeholder="" name="current_password" autocomplete="off" required />
                            <div class="invalid-feedback">
                                Please input your current password.
                            </div>
                        </div>


                        <div class="mb-10 fv-row" data-kt-password-meter="true">

                            <div class="mb-1">

                                <label class="required form-label fw-bold fs-6 mb-2">New Password</label>


                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="password" autocomplete="off" required />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <div class="invalid-feedback">
                                    Please input your new password.
                                </div>


                                <div class="d-flex align-items-center mb-3"
                                    data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>

                            </div>


                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                symbols.</div>

                        </div>


                        <div class="fv-row mb-10">
                            <label class="required form-label fw-bold fs-6 mb-2">Confirm New Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                placeholder="Retype your new password" name="password_confirmation"
                                autocomplete="off" required />
                            <div class="invalid-feedback">
                                Please Retype your new password.
                            </div>
                        </div>


                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    <div class="modal fade metronic_modal" id="update_role_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="fw-bolder">Update User Role</h2>


                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-modal-action="close">

                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>

                    </div>

                </div>


                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                        @csrf
                        @method('PATCH')


                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">


                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                        fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>



                            <div class="d-flex flex-stack flex-grow-1">

                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-700">Please note that reducing a user role rank, that
                                        user will lose all priviledges that was assigned to the previous role.</div>
                                </div>

                            </div>

                        </div>






                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


</x-admin-app-layout>
