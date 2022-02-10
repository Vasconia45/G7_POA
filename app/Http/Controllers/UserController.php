<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Friend;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::Where('id', $request->user)->first();
        if($user->verified == true){
            $profiles = $this->listFriends();
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
        $user = Auth::user();
        $profiles = $this->listFriends();
        dd($profiles);
        return redirect('/inicio')->with('user', 'profiles');
    }

    public function profilePage(Request $request){
        $user = Auth::user()->id;
        $profile = Profile::where('user_id', $user)->first('id');
        $profpic = $profile->profile_picture;
        //dd($request->input('idUser'));
        //dd($user);
        //dd(Auth::user()->user_name);
        //dd($profpic);
        return view('profile', compact('profile'));    
    }

    public function listFriends(){
        $profiles = array();
        $friends = Profile::all();
        $userProfileid = Profile::where('user_id', Auth::user()->id)->first();
        for($i = 0; $i < count($friends); $i++){
            $checkfriend1 = Friend::Where('requester_id', $userProfileid->id)
                ->where('friend_id', $friends[$i]->id)
                ->first();
            $checkfriend2 = Friend::Where('requester_id', $friends[$i]->id)
                ->where('friend_id', $userProfileid->id)
                ->first();
            if($userProfileid->id != $friends[$i]->id && $checkfriend1 == null && $checkfriend2 == null){
                $profiles[$i] = User::Where('id', $friends[$i]->user_id)->first();
            }
        }
        return $profiles;
    }

    public function addFriend($id){
        $user = Profile::where('user_id', Auth::user()->id)->first();
        $friend = Profile::where('user_id', $id)->first();
        $profiles = $this->listFriends();
        Friend::create([
            'requester_id' => $user->id,
            'friend_id' => $friend->id,
            'isFriend' => false
        ]);
        $this->sendMessage($friend, $user);
        return redirect()->back()
            ->with(compact('profiles'));
    }

    public function sendMessage($friend, $user){
        $transmitter = $user->id;
        $receiver = $friend->id;
        /*$message = Profile::find('id', $transmitter)->first();
        dd($message);*/
        Message::create([
            'transmitter_id' => $transmitter,
            'receiver_id' => $receiver,
            'message' => " wants to be your friend."
        ]);
    }
    
}
