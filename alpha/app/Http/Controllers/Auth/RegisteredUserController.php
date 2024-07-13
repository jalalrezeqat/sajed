<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{
    /** 
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => 'required|min:6',
            'password_verified_at' => 'required|same:password|min:6',
        ], [
            'email.required' => 'The email is required.',
            'email.email' => 'The email needs to have a valid format.',
            'email.unique' => 'الايميل المدخل مستخدم ',
            'password_verified_at.same' => 'كلمة المرور غير متطابقة',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'branch' => $request->branch,
            'polices'=> $request->polices,
            'Governorate' => $request->Governorate,
            'password' => Hash::make($request->password),
            'password_verified_at' => Hash::make($request->passwpassword_verified_atord),


        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}