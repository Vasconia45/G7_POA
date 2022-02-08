<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Friend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::Where('id', $request->user)->first();
        if($user->verified == true){
            $profiles = $this->listFriends($request);
            return view('inicio', compact('user', 'profiles'));
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
        $user = User::find($request->input('idUser'));
        return view('inicio', compact('user'));
    }

    public function listUsers(){
        $user = User::Where('user_type', 'user')->first();
    }

    public function listFriends(Request $request){
        $profiles = array();
        $friends = Profile::all();
        for($i = 0; $i < count($friends); $i++){
            $checkfriend1 = Friend::Where('requester_id', Auth::user()->id)
                ->where('friend_id', $friends[$i]->id)
                ->first();

            $checkfriend2 = Friend::Where('requester_id', $friends[$i]->id)
                ->where('friend_id', Auth::user()->id)
                ->first();
            
            /*if($isFriend == false){
                return "false";
            }
            else{
                return "jik";
            }*/
            $users = User::Where('id', $friends[$i]->user_id)->first('id');
            if($users->id != Auth::user()->id && $checkfriend1 == null && $checkfriend2 == null){
                $profiles[$i] = User::Where('id', $friends[$i]->user_id)->first();
            }
        }
        return $profiles;
    }

    public function refreshFriends(){

    }


    public function addFriend($id){
        $user = Auth::user()->id;
        Friend::create([
            'requester_id' => $user,
            'friend_id' => $id
        ]);

        return redirect()->back();
    }
    
}
