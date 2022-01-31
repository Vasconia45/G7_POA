<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserSessionController extends Controller
{

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::Where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            if ($request->email === env('MAIL_USERNAME')) {
                return redirect()->route('adminController');
            } else {
                return redirect()->route('userController', compact('user'));
            }
        }
        return back()->with(['error' => 'The email or the password are incorrect.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
}
