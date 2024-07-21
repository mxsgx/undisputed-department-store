<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::whereEmail($request->validated('email'))->first();

        if (! $user) {
            return back()->withErrors([
                'email' => [__('We could not find user with these credentials.', ['email' => $request->validated('email')])],
            ]);
        }

        if (! Hash::check($request->validated('password'), $user->password)) {
            return back()->withErrors([
                'email' => [__('Invalid credentials, email or password is incorrect.')],
            ]);
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
