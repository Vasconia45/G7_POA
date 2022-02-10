<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Profile;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class mediaUpload extends Controller
{
    public function uploadingMedia(Request $request) {
        $user = $request->user();
        $categories = Category::all();
        return view('mediaUpload', compact('user'), compact('categories'));
    }

    public function uploadMedia(Request $request){
        
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpeg,png,jpg,jfif,mp4',
            'category_id'=>'required',
        ]);

        $test = $request->file('file');
        $extension = $request->file('file')->guessClientExtension();
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        //$user = User::find(Auth::user()->id);
        $categories = Category::all();
        $media = Media::where('profile_id', $profile->id);

        //dd($request->file('file'));
        
        if ($validator->fails()) {
            return view('mediaUpload', compact('categories'))->with(['error' => 'The file could not be uploaded, check the extension of the uploaded file, it must be jpeg,jpg,png or mp4, also do not forget to select a category']);
        } else {
            $media = Media::create([
                'category_id' => $request->input('category_id'),
                'profile_id' => $profile->id,
                'title' => time() . '-' . $request->input('name') . '.' . $extension,
                'description' => $request->input('desc'),
                'media_type' => $test->getClientMimeType(),
                'media_file' => $test->getClientOriginalName(),
            ]);
            //dd($extension);
            $request->file->move(public_path("storage/upload/" . $profile->id), $test->getClientOriginalName());
            return redirect('/profile')->with('profile', ['successful_message' => 'Media has been uploaded successfully']);
            //return view('profile', compact('profile'))->with(['successful_message' => 'Media has been uploaded successfully']);
        }
    }
}
