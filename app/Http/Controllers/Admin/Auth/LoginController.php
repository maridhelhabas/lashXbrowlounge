<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed, redirect back with error message
        return back()->withErrors(['email' => 'Invalid credentials']);
    }


    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
    //         return redirect()->route('admin.dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    // public function logout(Request $request)
    // {
    //     Auth::guard('admin')->logout();

    //     return redirect()->route('admin.admin-login');
    // }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.admin-login')->with('status', 'Successfully logged out.');
    }


}
