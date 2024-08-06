<x-frontend-app-layout :title="'Login'">
    <div class="ps-account">
        <div class="container">
            <div class="row my-5 align-items-center">
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="ps-form--review">
                            <h2 class="ps-form__title">Register</h2>
                            <div class="ps-form__group">
                                <x-input-label class="ps-form__label" for="name" :value="__('Full Name')" />
                                <x-text-input id="name" class="form-control ps-form__input" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="ps-form__group">
                                <x-input-label class="ps-form__label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control ps-form__input" type="email"
                                    name="email" :value="old('email')" required autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="ps-form__group">
                                <x-input-label class="ps-form__label" for="password" :value="__('Password')" />
                                <div class="input-group">
                                    <x-text-input id="password" class="form-control ps-form__input" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <div class="input-group-append"><a class="fa fa-eye-slash toogle-password"
                                            href="javascript: vois(0);"></a></div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <p class="ps-form__text">Hint: The password should be at least twelve characters long.
                                    To make it stronger, use upper and lower case letters, numbers, and symbols like ! "
                                    ? $ % ^ &amp; ).</p>
                            </div>
                            <div class="ps-form__group">
                                <x-input-label class="ps-form__label" for="password" :value="__('Confirm Password')" />
                                <div class="input-group">
                                    <x-text-input id="password_confirmation" class="form-control ps-form__input"
                                        type="password" name="password_confirmation" required
                                        autocomplete="new-password" />
                                    <div class="input-group-append"><a class="fa fa-eye-slash toogle-password"
                                            href="javascript: vois(0);"></a></div>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="">
                                <h6 class="">
                                    {{ __('Already registered?') }}
                                    <a href="{{ route('login') }}"
                                        class="btn btn-sm btn-link text-gray fw-bold fs-6">Log In</a>
                                </h6>
                            </div>
                            <div class="ps-form__submit">
                                <x-primary-button class="ps-btn ps-btn--warning" type="submit">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <img src="https://img.freepik.com/free-vector/ecommerce-campaign-concept-illustration_114360-8432.jpg?semt=sph"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>
