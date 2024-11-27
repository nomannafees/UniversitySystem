<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function LoginForm(){
        return view('auth.admin-login');
    }
    public function LoginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role !== 'admin') {
            Auth::logout();
                return back()->withErrors([
                    'email' => 'You do not have permission to access this area.',
                ])->onlyInput('email');
            }
             $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard')->with('status', 'Login successful!');
        }
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->onlyInput('email');
    }

}
