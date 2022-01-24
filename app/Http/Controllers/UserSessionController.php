<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;

class UserSessionController extends Controller
{
    public function store(Request $request)
    {
        $password = $request->password;
        $email = $request->email;
        $hashedPassword = User::where('email', $email)->first();
        $users = User::Where('user_type', 'user')->get();
        
        if ($email === env('MAIL_USERNAME') && Hash::check($password, $hashedPassword->password)) {
            return view('administrator', compact('users'));
        }
        elseif(Hash::check($password, $hashedPassword->password) && $email == $hashedPassword->email){
            return view('inicio');
        }
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
    public function edit($id) {
        $user = User::find($id);
        return view('userData',['user' => $user]);
    }
    public function update(Request $request) {
        /*$request->validate([
            'user_name' => 'required|max:20|unique:users',
            'email' => 'required|email|unique:users',  
            'password' => 'required|min:8|max:16|regex:/[^a-zA-Z0-9]/',
            'birth_date' => 'required',
        ]);
        if(User::find($request->input('user_name'))!=true){
            $request->validate(['user_name'=>'required|max:20|unique:users']);
        }
        if(User::find($request->input('email'))!=true){
            $request->validate(['email' => 'required|email|unique:users']);
        }
        $request->validate([  
            'password' => 'required|min:8|max:16|regex:/[^a-zA-Z0-9]/',
            'birth_date' => 'required',
        ]);
        dd($request->validate());
        if($request->validate() == 1){*/
            $user = User::find($request->input('idUser'));
            $user->user_name = $request->input('user_name');
            $user->email = $request->input('email');
            if($request->input('password') != null){
                $user->password = Hash::make($request->input('password'));
            }

            $user->birth_date = $request->input('birth_date');

        $user->save();
        $users = User::Where('user_type', 'user')->get();
        return view('administrator', compact('users'))->with(['succesful_message' => 'Profile updated succesfuly.']);
            
    }

    public function delete(Request $request) {
        $user = User::find($request->input('idUser'));
        if($user==true) {
            $user->delete();
            $users = User::Where('user_type', 'user')->get();
            return view('administrator', compact('users'))->with(['successful_delete_message' => 'User has been deleted successfully']);
        } else {
            return view('administrator')->with(['error_message' => 'There has been an error.']);
        }
    }
}
