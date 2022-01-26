<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSessionController extends Controller
{

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if ($request->email === env('MAIL_USERNAME')) {
                return redirect()->route('adminController');
            } else {
                $user_name = Auth::user()->user_name;
                return redirect()->route('userController', $user_name);
            }
        }
        return back()->with(['error' => 'The email or the password is incorrect.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
}
