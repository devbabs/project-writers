<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $request->validate([
                'email' => 'bail|required|email',
                'password' => 'bail|required'
            ]);

            if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
                'admin' => true
            ]))
            {
                return redirect()->route('admin.dashboard');
            }

            return back()->with('danger', 'Invalid login.');
        }

        return view('admin.auth.pages.login');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
