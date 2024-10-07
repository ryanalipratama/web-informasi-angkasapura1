<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('username', 'password');

        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->intended('/admin/dashboard');
        }
        return redirect()->back()->withErrors(
            ['username' => 'username atau password salah.']
        );
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect ('/admin/login');
    }

}
