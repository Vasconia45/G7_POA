<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function list(Request $request){
        $users = User::Where('user_type', 'user')->get();
        return view('administrator', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('userData', ['user' => $user]);
    }

    public function updateUser(Request $request)
    {
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
        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->birth_date = $request->input('birth_date');

        $user->save();
        return redirect()->route('adminController')->with(['successful_message' => 'User has beenupdated correctly']);
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->input('idUser'));
        dd($user);
        if ($user == true) {
            $user->delete();
            return redirect()->route('adminController')->with(['successful_delete_message' => 'User has been deleted successfully']);
        } else {
            return redirect()->route('adminController')->with(['error_message' => 'There has been an error.']);
        }
    }
    
}
