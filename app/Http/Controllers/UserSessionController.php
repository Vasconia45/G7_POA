<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSessionController extends Controller
{
    public function store(Request $request)
    {
        $password = $request->password;
        $email = $request->email;

        $hashedPassword = User::where('email', $email)->first();

        if(Hash::check($password, $hashedPassword->password)){

            //$request->session()->flush();
            return view('inicio');
        } else {
            return "error";
        }
        /*$password = $request->password;
        $email = $request->email;
        $mailDB = DB::table('users')
            ->where('email', $email)
            ->get('password');
        $user = User::where('email', $request->email)
        ->where('password',md5($request->password))
        ->first();
            Auth::login($user);
            $data = Auth::user()->email;
            return view('onProcess');*/
            //return redirect('onProcess');
        //$passwordDB = Crypt::decrypt($mailDB); 
        //return $passwordDB;
        /*if($mailDB == $passwd){
            return view('onProcess');
        }
        else{
            dd($mailDB, $passwd);
            /*return redirect()->route('landingPage')
            ->with('error',trans('messages.error'));
        }*/
        /*$password = !passwordEncoder.isPasswordValid($password, 'password', null)
        $password = $request->password;
        $email = $request->email;
        $passwd = DB::table('users')->where('email', $email)->value('password');
        Hash::check($password, $passwd);
        $users = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->get();
        if (count($users) > 0) {
            //dd($request->only('email','passwd'));
            return view('onProcess');
            //dd($request->only('email','passwd'));
        } else {
            return redirect()->route('landingPage')
            ->with('error',trans('messages.error'));
        }*/
        /*if(auth()->attempt([$email,$password]) == false) {
            return back()->withErrors([
                'message' => 'The email or the password is incorrect',
            ]);
        }*/
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}