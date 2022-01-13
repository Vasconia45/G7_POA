<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function PHPUnit\Framework\returnValueMap;

class UserSessionController extends Controller
{
    public function store(){

        if(auth()->attempt(request(['email'], ['password'])) == false){
            return back()->route('landingPage')
            ->with('error',trans('messages.error'));
        }
        return redirect()->route('landingPage');
    }

    public function destroy(){

        auth()->logout();

        return redirect();
    }
}
