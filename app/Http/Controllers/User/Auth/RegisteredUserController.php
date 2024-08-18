<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\UserRegistrationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'                         => 'nullable|in:Mr,Mrs,Ms',
            'first_name'                    => 'required|string|max:255',
            'last_name'                     => 'required|string|max:255',
            'email'                         => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'                      => ['required', 'string', 'min:8', 'confirmed'],
            // 'password'                      => ['required', 'confirmed', Rules\Password::defaults()],
            'phone'                         => 'nullable|string|max:15',
            'address_one'                   => 'required|string|max:255',
            'address_two'                   => 'nullable|string|max:255',
            'zipcode'                       => 'required|string|max:10',
            'state'                         => 'required|string|max:100',
            'company_name'                  => 'nullable|string|max:255',
            'company_registration_number'   => 'nullable|string|max:255',
            'company_vat_number'            => 'nullable|string|max:255',
            'selling_platforms'             => 'nullable|string',
            'customer_type'                 => 'nullable|string',
            'referral_source'               => 'nullable|string|max:255',
            'buying_group_membership'       => 'nullable|string|max:255',
            'website_address'               => 'nullable|url',
            'buying_group_name'             => 'nullable|string|max:255',
            'current_suppliers'             => 'nullable|string',
            'annual_spend'                  => 'nullable|string',
            'newsletter_preference'         => 'nullable',
            'terms_condition'               => 'required',
        ]);

        // Create a new customer record
        $user = User::create([
            'title'                         => $request->title,
            'first_name'                    => $request->first_name,
            'last_name'                     => $request->last_name,
            'email'                         => $request->email,
            'password'                      => Hash::make($request->password),
            'phone'                         => $request->phone,
            'address_one'                   => $request->address_one,
            'address_two'                   => $request->address_two,
            'zipcode'                       => $request->zipcode,
            'state'                         => $request->state,
            'company_name'                  => $request->company_name,
            'company_registration_number'   => $request->company_registration_number,
            'company_vat_number'            => $request->company_vat_number,
            'selling_platforms'             => $request->selling_platforms,
            'customer_type'                 => $request->customer_type,
            'referral_source'               => $request->referral_source,
            'buying_group_membership'       => $request->buying_group_membership,
            'website_address'               => $request->website_address,
            'buying_group_name'             => $request->buying_group_name,
            'current_suppliers'             => $request->current_suppliers,
            'annual_spend'                  => $request->annual_spend,
            'newsletter_preference'         => $request->newsletter_preference,
            'terms_condition'               => $request->terms_condition,
            'status'                        => "inactive",
        ]);
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        event(new Registered($user));
        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
        Auth::login($user);
        Session::flash('success', "You have registered Successfully");
        return redirect(RouteServiceProvider::HOME);
    }
}
