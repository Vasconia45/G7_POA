<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileEdit extends Controller
{
    public function UpdateUserProfile(Request $request) {
       
        $validator = Validator::make($request->all(), [
            'profpic' => 'mimes:jpeg,png,jpg,jfif',
            'wallpaper' => 'mimes:jpeg,png,jpg,jfif',
        ]);


        //profile update
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $media = Media::where('id', Auth::user()->id)->first();

        if($request->input('desc') != null) {
            $profile->description = $request->input('desc');
        }

        if($request->file('wallpaper') != null) {
            $wallpaper = $request->file('wallpaper');
            $profile->wallpaper = $wallpaper->getClientOriginalName();
            $wallpaper->move(public_path("storage/upload/" . $profile->id), $wallpaper->getClientOriginalName());
        }
        if($request->file('profpic') != null) {
            $profpic = $request->file('profpic');
            $profile->profile_picture = $profpic->getClientOriginalName();
            $profpic->move(public_path("storage/upload/" . $profile->id), $profpic->getClientOriginalName());
        }

        $profile->save();

        //dd($media);

        return view('profile', compact("profile"))->with(['successful_message' => 'Profile has been updated successfully']);
    }
}
