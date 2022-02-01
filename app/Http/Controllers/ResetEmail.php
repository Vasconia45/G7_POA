<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetEmail extends Controller
{
    public function send(Request $request){
        $subject = "Forgot the password??";
        $for = $_POST['email'];
        Mail::send('/emails/email',$request->all(), function($msj) use($subject,$for){
            $msj->from(env('MAIL_USERNAME'),"YouShar3");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back()
        ->with('reset',trans('messages.sendMail'));
    }

    public function return(){
        return redirect()->route('ResetFormulario');
    }

    public function reset(Request $request){
        $user = User::Where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('landingPage')
        ->with(['confirmation' => 'Your password has been modified correctly.']);
    }
}
