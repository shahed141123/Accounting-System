<x-frontend-app-layout :title="'Login'">

    <div class="ps-account">
        <div class="container">
            <div class="row my-5 align-items-center">
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="ps-form--review">
                            <h2 class="ps-form__title">Login</h2>
                            <div class="ps-form__group">
                                <x-input-label class="form-label form__label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-solid ps-form__input"
                                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="ps-form__group">
                                <x-input-label class="ps-form__label form-label" for="password" :value="__('Password')" />
                                <div class="input-group">
                                    <x-text-input class="form-control form-control-solid ps-form__input" type="password"
                                        id="password" name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <div class="input-group-append">
                                        <a class="fa fa-eye-slash toogle-password" href="javascript:void(0);"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-form__submit">
                                <x-primary-button class="ps-btn ps-btn--warning" type="submit">
                                    {{ __('Log in') }}
                                </x-primary-button>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="ps-account__link" href="{{ route('password.request') }}">Lost your
                                    password?</a>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <img src="https://img.freepik.com/free-vector/computer-login-concept-illustration_114360-7962.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
