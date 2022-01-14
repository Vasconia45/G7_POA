<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSessionController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->only('email','passwd'));
        //$password = !passwordEncoder.isPasswordValid($password, 'password', null)
        $password = $request->password;
        $email = $request->email;
        //$passwd = DB::table('users')->where('email', $email)->value('password');
        //Hash::check($password, $passwd);
        $users = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->get();
        if (count($users) > 0) {
            //dd($request->only('email','passwd'));
            return view('onProcess');
            //dd($request->only('email','passwd'));
        } else {
            dd($request->all());
            return back()->withErrors([
                'message' => 'The email or the password is incorrect',
            ]);
        }
        /*if(auth()->attempt([$email,$password]) == false) {
            return back()->withErrors([
                'message' => 'The email or the password is incorrect',
            ]);
        }
        return view('onProcess');*/
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
