<x-admin-guest-layout>
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
            style="background-image:linear-gradient(45deg,#0a1d5b,#051225)">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    <a href="" class="py-9 mb-5">
                        <img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-1.svg') }}" class="h-60px">
                    </a>
                    <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #ffffff;">Welcome to Metronic</h1>
                    <p class="fw-bold fs-2" style="color: #ffffff;">Discover Amazing Metronic
                        <br>with great build tools
                    </p>
                </div>
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                    style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.login') }}" method="POST">
                        @csrf

                        <div class="fv-row mb-10">
                            <x-metronic.label
                                class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input type="email" name="email"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter your email address" value="{{ old('email') }}"
                                autocomplete="off"></x-metronic.input>
                        </div>

                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <x-metronic.label
                                    class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</x-metronic.label>
                                @if (Route::has('admin.password.request'))
                                    <a href="{{ route('admin.password.request') }}" class="link-primary fs-6 fw-bolder">
                                        {{ __('Forgot password ?') }}</a>
                                @endif
                            </div>
                            <div class="position-relative mb-3">
                                <x-metronic.input type="password" name="password" id="passwordField"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter your password" autocomplete="off">
                                </x-metronic.input>
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-2" style="@error('password')top: 34% !important; @enderror"
                                    data-kt-password-meter-control="visibility" onclick="togglePasswordVisibility()">
                                    <i id="eyeIcon" class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>

                        <div class="fv-row mb-10">
                            <input id="remember_me" type="checkbox" class="form-check-input me-3" name="remember">
                            <x-metronic.label for="remember_me"
                                class="form-check-label">{{ __('Remember me') }}</x-metronic.label>
                        </div>

                        <div class="text-center">
                            <x-metronic.button type="submit" class="primary btn-lg w-100 mb-5 rounded-1">
                                <span class="indicator-label"> {{ __('Continue') }}</span>
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        @push('scripts')
            <script>
                function togglePasswordVisibility() {
                    const passwordField = document.getElementById('passwordField');
                    const eyeIcon = document.getElementById('eyeIcon');
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        eyeIcon.classList.remove('bi-eye');
                        eyeIcon.classList.add('bi-eye-slash');
                    } else {
                        passwordField.type = 'password';
                        eyeIcon.classList.remove('bi-eye-slash');
                        eyeIcon.classList.add('bi-eye');
                    }
                }
            </script>
        @endpush
</x-admin-guest-layout>
