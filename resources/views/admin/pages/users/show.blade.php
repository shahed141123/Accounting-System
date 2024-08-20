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
                        {{-- <div class="mb-9">
                            <div class="badge badge-lg badge-light-primary d-inline">Roles</div>
                        </div> --}}
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
            @include('admin.pages.users.partials.overview')
        </div>
    </div>






</x-admin-app-layout>
