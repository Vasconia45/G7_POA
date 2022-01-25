<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetEmail;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio');

Route::get('/profile', function(){
    return view('profile');
})->name('profilePage');


//1.Login routes.

//Route for getting logout from any session.
Route::get('/login/logout', [UserSessionController::class,  'logout'])->name('logout');

//1.1 Admin login and admin configurations.
Route::post('/updateUser', [UserSessionController::class, 'update'])->name('updateUser');

Route::post('/deleteUser', [UserSessionController::class, 'delete'])->name('deleteUser');

Route::get('/userData/{id}', [UserSessionController::class, 'edit'])->name('editUser');

Route::get('/administrator', function(){
    return view('administrator');
})->name('administrator');

//1.2 Users login.

//
Route::post('/login', [UserSessionController::class, 'login'])->name('loginUser');



//2.This the registration part, from sending the mail for the confirmation link and then the registration of the user in the database.

//Route to check if the data inserted in the registration form allready exists on the Db or doesn't exists.
Route::post('/register', [UserRegisterController::class, 'check'])->name('registerUser');

//Route to registered the user when he clicks on the confirmation button in his email.
Route::get('/register/confirmation', [UserRegisterController::class, 'register'])->name('confirmation');


//3.This part is everything from the forgotPassword event, from sending the message to the resetPassword view.

//Route for sending the ForgotPassword mail.
Route::post('/reset', [ResetEmail::class, 'send'])->name('resetMail');

//Route for the view of the resetPassword form.
Route::get('/reset/resetFormulario', function(){
    return view('resetPassword');
})->name('ResetFormulario');


//4.This part is for the language.

//Route to change the languages of the Pages.
Route::get('lang/{lang}', [LanguageController::class, '__invoke'])->name('lang.swap');


/*Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
