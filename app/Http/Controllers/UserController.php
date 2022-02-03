<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::Where('id', $request->user)->first();
        if($user->verified == true){
            return view('inicio', compact('user'));
        }
        else{
            return back()->with(['error' => 'You have to confirm your account, check your email.']);
        }
    }

    public function editcli($id) {
        $user = User::find($id);
        return view('userDataCli',compact('user'));
    }

    public function updatecli(Request $request) {
        $user = User::find($request->input('idUser'));
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        if($request->input('password') != null){
            $user->password = Hash::make($request->input('password'));
        }

        $user->birth_date = $request->input('birth_date');

        $user->save();
        return view('inicio', compact('user'))->with(['successful_message' => 'Profile updated successfully']);
    }

    public function deletecli(Request $request) {
        $user = User::find($request->input('idUser'));
        if($user==true) {
            $user->delete();
            return view('landingPage')->with(['successful_delete_message' => 'User has been deleted successfully']);
        } else {
            return view('userDataCli',compact('user'))->with(['error_message' => 'There has been an error.']);
        }
        
    }

    public function back(Request $request){
        dd($request);
        return redirect()->back();
    }
    
}
