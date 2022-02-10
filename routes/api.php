<?php

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/data', function($id){
    dd($id);
    $friends = Friend::all();
    $userSessionProfile = Profile::where('user_id')->first();
    for($i = 0; $i < count($friends) ;$i++){
        $friend = Friend::where('requester_id',$userSessionProfile)
        ->orwhere('friend_id',$userSessionProfile)
        ->first();
        return $friend;
    }
});