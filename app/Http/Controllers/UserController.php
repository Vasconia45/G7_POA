<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::Where('id', $request->user)->first();
        if($user->verified == true){
            return redirect()->route('inicio');
        }
        else{
            return back()->with(['verification_error', 'You have to confirm your account, check your email.']);
        }
    }

    public function reset(Request $request){
        dd($request->all());
        return "ok";
    }
    
}
