<x-frontend-app-layout :title="'Sign Up'">
    <div class="ps-account">
        <div class="container">
            <div class="row my-5 align-items-center pb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Register for an account</h3>
                        <h1>Please Complete the Form Below, <br> to Register for an Account.</h1>
                        <p>Please note: our minimum order quantities are £500 (UK mainland), £750 (restricted postcodes,
                            Ireland and Northern Ireland).</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="ps-form--review row mb-5">
                            <div class="col-12">
                                <h2 class="ps-form__title">Register</h2>
                            </div>
                            <div class="ps-form__group col-2">
                                <x-input-label class="ps-form__label" for="title" :value="__('Title')" />
                                <div class="input-group">
                                    <select name="title" class="form-select ps-form__input" id="title">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </div>
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <!-- First Name -->
                            <div class="ps-form__group col-5">
                                <x-input-label class="ps-form__label" for="first_name">First Name <span class="text-danger">*</span></x-input-label>
                                <x-text-input id="first_name" class="form-control ps-form__input" type="text"
                                    name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <!-- Last Name -->
                            <div class="ps-form__group col-5">
                                <x-input-label class="ps-form__label" for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" class="form-control ps-form__input" type="text"
                                    name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div class="ps-form__group col-6">
                                <x-input-label class="ps-form__label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control ps-form__input" type="email"
                                    name="email" :value="old('email')" required autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Confirm Email -->
                            <!-- Phone -->
                            <div class="ps-form__group col-6">
                                <x-input-label class="ps-form__label" for="phone" :value="__('Phone')" />
                                <div class="input-group">
                                    <x-text-input id="phone" class="form-control ps-form__input" type="tel"
                                        name="phone" :value="old('phone')" required autocomplete="tel" />
                                </div>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <!-- Password -->

                            <div class="ps-form__group col-6">
                                <x-input-label class="ps-form__label" for="password" :value="__('Password')" />
                                <div class="input-group">
                                    <x-text-input id="password" class="form-control ps-form__input" type="password"
                                        name="password" :value="old('password')" required autocomplete="new-password" />
                                    <div class="input-group-append">
                                        <a class="fa fa-eye-slash toogle-password" href="javascript:void(0);"></a>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="ps-form__group col-6">
                                <x-input-label class="ps-form__label" for="password_confirmation" :value="__('Confirm Password')" />
                                <div class="input-group">
                                    <x-text-input id="password_confirmation" class="form-control ps-form__input"
                                        type="password" name="password_confirmation" required :value="old('password_confirmation')"
                                        autocomplete="new-password" />
                                    <div class="input-group-append">
                                        <a class="fa fa-eye-slash toogle-password" href="javascript:void(0);"></a>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <!-- Title -->



                        </div>

                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                                <div class="card border-0">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#billingAddress"
                                                aria-expanded="true" aria-controls="billingAddress">
                                                Billing Address Details
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="billingAddress" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- House/Block/Road -->
                                                <div class="ps-form__group col-8">
                                                    <x-input-label class="ps-form__label" for="address_one"
                                                        :value="__('House/Block/Road')" />
                                                    <div class="input-group">
                                                        <x-text-input id="address_one"
                                                            class="form-control ps-form__input" type="text" :value="old('address_one')"
                                                            name="address_one" required autocomplete="address_one" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('address_one')" class="mt-2" />
                                                </div>

                                                <!-- Zip Code -->
                                                <div class="ps-form__group col-4">
                                                    <x-input-label class="ps-form__label" for="zipcode"
                                                        :value="__('Zip Code')" />
                                                    <div class="input-group">
                                                        <x-text-input id="zipcode"
                                                            class="form-control ps-form__input" type="text" :value="old('zipcode')"
                                                            name="zipcode" required autocomplete="zipcode" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('zipcode')" class="mt-2" />
                                                </div>

                                                <!-- State -->
                                                <div class="ps-form__group col-4">
                                                    <x-input-label class="ps-form__label" for="state"
                                                        :value="__('State')" />
                                                    <div class="input-group">
                                                        <x-text-input id="state"
                                                            class="form-control ps-form__input" type="text"
                                                            name="state" :value="old('state')" required autocomplete="state" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                                </div>

                                                <!-- City/Country -->
                                                <div class="ps-form__group col-8">
                                                    <x-input-label class="ps-form__label" for="address_two"
                                                        :value="__('City/Country')" />
                                                    <div class="input-group">
                                                        <x-text-input id="address_two"
                                                            class="form-control ps-form__input" type="text"
                                                            name="address_two" :value="old('address_two')" required autocomplete="address_two" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('address_two')" class="mt-2" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#companyDetails"
                                                aria-expanded="false" aria-controls="companyDetails">
                                                Company & My Details
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="companyDetails" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label" for="company_name"
                                                        :value="__('Company Name')" />
                                                    <div class="input-group">
                                                        <x-text-input id="company_name"
                                                            class="form-control ps-form__input" type="text"
                                                            name="company_name" required
                                                            autocomplete="company_name" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label"
                                                        for="company_registration_number" :value="__('Company Reg Number (if available)')" />
                                                    <div class="input-group">
                                                        <x-text-input id="company_registration_number"
                                                            class="form-control ps-form__input" type="text"
                                                            name="company_registration_number"
                                                            autocomplete="company_registration_number" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('company_registration_number')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-12">
                                                    <x-input-label class="ps-form__label" for="company_vat_number"
                                                        :value="__('Company VAT Number (if available)')" />
                                                    <div class="input-group">
                                                        <x-text-input id="company_vat_number"
                                                            class="form-control ps-form__input" type="text"
                                                            name="company_vat_number"
                                                            autocomplete="company_vat_number" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('company_vat_number')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-12">
                                                    <x-input-label class="ps-form__label" for="selling_platforms"
                                                        :value="__(
                                                            'Internet Retailers - Which Selling Platforms Do You Use? (Select all that apply)',
                                                        )" />
                                                    <div class="input-group">
                                                        <select name="selling_platforms"
                                                            class="form-select ps-form__input" id="selling_platforms">
                                                            <option value="ebay">Ebay</option>
                                                            <option value="amazon">Amazon</option>
                                                            <option value="own_website">Own Website</option>
                                                            <option value="facebook">Facebook</option>
                                                            <option value="etsy">Etsy</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('selling_platforms')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label" for="customer_type"
                                                        :value="__('Customer Type')" />
                                                    <div class="input-group">
                                                        <select name="customer_type"
                                                            class="form-select ps-form__input" id="customer_type">
                                                            <option value="Wholesaler">Wholesaler</option>
                                                            <option value="Garden Centre">Garden Centre</option>
                                                            <option value="Internet Retailer - Ebay and/or Amazon">
                                                                Internet Retailer - Ebay and/or Amazon</option>
                                                            <option value="Internet Retailer - own website">Internet
                                                                Retailer - own website</option>
                                                            <option value="Other">Other</option>
                                                            <option value="Charity">Charity</option>
                                                            <option value="Garage">Garage</option>
                                                            <option value="Factory Shop">Factory Shop</option>
                                                            <option value="School/University">School/University
                                                            </option>
                                                            <option value="Nursing Home/Hospital">Nursing Home/Hospital
                                                            </option>
                                                            <option value="Hotels/Pubs/Clubs/Events">
                                                                Hotels/Pubs/Clubs/Events</option>
                                                            <option value="Tradesman">Tradesman</option>
                                                            <option value="Market Trader">Market Trader</option>
                                                            <option value="Pound Shop/Discount Store">Pound
                                                                Shop/Discount Store</option>
                                                            <option value="Retailer 6 plus shops">Retailer 6 plus shops
                                                            </option>
                                                            <option value="Retailer 1 - 5 shops">Retailer 1 - 5 shops
                                                            </option>
                                                            <option value="Retailer 1 shop">Retailer 1 shop</option>
                                                        </select>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('customer_type')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label" for="referral_source"
                                                        :value="__('How Did You Find Out About Us? *')" />
                                                    <div class="input-group">
                                                        <select name="referral_source"
                                                            class="form-select ps-form__input" id="referral_source">
                                                            <option value="internet_search">Internet Search</option>
                                                            <option value="advert_in_news">Advert in News</option>
                                                            <option value="facebook">Facebook</option>
                                                            <option value="linked_in">Linked In</option>
                                                            <option value="trade_show">Trade Show</option>
                                                            <option value="word_of_mouth">Word of Mouth</option>
                                                            <option value="existing_customer">Existing Customer</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('referral_source')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label fs-6"
                                                        for="buying_group_membership" :value="__('Member of a Buying Group?')" />
                                                    <div class="input-group">
                                                        <select name="buying_group_membership"
                                                            class="form-select ps-form__input"
                                                            id="buying_group_membership">
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('buying_group_membership')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-6">
                                                    <x-input-label class="ps-form__label" for="website_address"
                                                        :value="__('Website Address')" />
                                                    <div class="input-group">
                                                        <x-text-input id="website_address"
                                                            class="form-control ps-form__input" type="url"
                                                            name="website_address" autocomplete="website_address" />
                                                    </div>
                                                    <x-input-error :messages="$errors->get('website_address')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-12">
                                                    <x-input-label class="ps-form__label" for="buying_group_name"
                                                        :value="__('Name of Your Buying Group (If applicable)')" />
                                                    <div class="input-group">
                                                        <textarea id="buying_group_name" class="form-control ps-form__input" name="buying_group_name" rows="1"
                                                            autocomplete="buying_group_name"></textarea>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('buying_group_name')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-12">
                                                    <x-input-label class="ps-form__label" for="current_suppliers"
                                                        :value="__('Who Are Your Current Suppliers?')" />
                                                    <div class="input-group">
                                                        <textarea id="current_suppliers" class="form-control ps-form__input" name="current_suppliers" rows="1"
                                                            autocomplete="current_suppliers"></textarea>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('current_suppliers')" class="mt-2" />
                                                </div>

                                                <div class="ps-form__group col-12">
                                                    <x-input-label class="ps-form__label" for="annual_spend"
                                                        :value="__(
                                                            'How Much Do You Expect to Spend With Us Per Annum?',
                                                        )" />
                                                    <div class="input-group">
                                                        <select name="annual_spend" class="form-select ps-form__input"
                                                            id="annual_spend">
                                                            <option value="Under £500">Under £500</option>
                                                            <option value="£1,000 - £2,000">£1,000 - £2,000</option>
                                                            <option value="£2,000 - £5,000">£2,000 - £5,000</option>
                                                            <option value="£5,000 - £10,000">£5,000 - £10,000</option>
                                                            <option value="£10,000 - £30,000">£10,000 - £30,000
                                                            </option>
                                                            <option value="£30,000 - £50,000">£30,000 - £50,000
                                                            </option>
                                                            <option value="Over £50,000">Over £50,000</option>
                                                        </select>
                                                    </div>
                                                    <x-input-error :messages="$errors->get('annual_spend')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Newsletter Preferences
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="newsletterYes"
                                                    name="newsletter_preference" value="yes">
                                                <label class="form-check-label" for="newsletterYes">Yes please, send
                                                    me email newsletters</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="newsletterNo"
                                                    name="newsletter_preference" value="no">
                                                <label class="form-check-label" for="newsletterNo">No thanks, please
                                                    don't send me email newsletters</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="terms_condition"
                                                    name="terms_condition" value="yes">
                                                <label class="form-check-label" for="terms_condition">I accept the Terms and Conditions & Privacy Policy. <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <h6 class="">
                                {{ __('Already registered?') }}
                                <a href="{{ route('login') }}" class="btn btn-sm btn-link text-gray fw-bold fs-6">Log
                                    In</a>
                            </h6>
                        </div>
                        <div class="ps-form__submit">
                            <x-primary-button class="ps-btn ps-btn--warning" type="submit">
                                {{ __('Register') }}
                            </x-primary-button>
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
