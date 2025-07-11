<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
          'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
          'password' => ['required', 'confirmed', Rules\Password::defaults()],
          'icon' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
      ], [
          'name.required' => __('auth.validation.name.required'),
          'name.max' => __('auth.validation.name.max'),
          'email.required' => __('auth.validation.email.required'),
          'email.email' => __('auth.validation.email.email'),
          'email.lowercase' => __('auth.validation.email.lowercase'),
          'email.max' => __('auth.validation.email.max'),
          'email.unique' => __('auth.validation.email.unique'),
          'password.required' => __('auth.validation.password.required'),
          'password.confirmed' => __('auth.validation.password.confirmed'),
          'password.min' => __('auth.validation.password.min'),
      ]);

        $path = null;
        if ($request->hasFile('icon')) {
            $path = $request->file('icon')->store('icon', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'icon' => $path,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
