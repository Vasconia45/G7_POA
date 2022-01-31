<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    function list(Request $request) {
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
        $user = User::find($request->input('idUser'));
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->birth_date = $request->input('birth_date');

        $user->save();
        return redirect()->route('adminController')->with(['successful_message' => 'User has been updated correctly']);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user == true) {
            $user->delete();
            return redirect()->route('adminController')->with(['successful_delete_message' => 'User has been deleted successfully']);
        } else {
            return redirect()->route('adminController')->with(['error_message' => 'There has been an error.']);
        }
    }

}
