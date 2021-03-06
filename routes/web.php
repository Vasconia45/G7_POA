<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetEmail;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\mediaUpload;
use App\Http\Controllers\ProfileEdit;

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

//This is the landingPage route.
Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

//This is the profilePage route.
Route::post('/profile', [UserController::class, 'profilePage'])->name('profilePage');

Route::get('/profile', [UserController::class, 'profilePage'])->name('profile');

Route::get('/wall', function(){
    return view('wall');
})->name('wall');

Route::post('/ProfileEdit', function () {
    return view('ProfileEdit');
})->name('ProfileEdit');

Route::post('/UpdateUserProfile', [ProfileEdit::class, 'UpdateUserProfile'])->name('UpdateUserProfile');

Route::post('/mediaUploading', [mediaUpload::class, 'uploadingMedia'])->name('mediaUploading');
Route::post('/mediaUpload', [mediaUpload::class, 'uploadMedia'])->name('mediaUploaded');

//1.Login routes.


//Route that validates the form and checks if its a user or the admin.
Route::post('/login', [UserSessionController::class, 'login'])->name('loginUser');

//Route for getting logout from any session.
Route::get('/login/logout', [UserSessionController::class,  'logout'])->name('logout');



//1.1 Admin login and admin configurations.

//Route that logs the admin.
Route::get('/admin', [AdminController::class, 'list'])->name('adminController')->middleware('auth');

//Route that returns the administrator view.
Route::get('/administrator', function(){
    return view('administrator');
})->name('administrator');

//Route that returns the update view.
Route::get('/admin/{id}', [AdminController::class, 'editUser'])->name('editUser');

//Route that edits the user and returns the administrator view.
Route::post('/updateUser', [AdminController::class, 'updateUser'])->name('updateUser');

//Route thst deletes the users.
Route::post('/admin/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');

//1.2 Users login.

//Route that logs the users.
Route::get('/index', [UserController::class, 'login'])->name('userController')->middleware('auth');

//Route that returns the principal view of the user when he logs in.
Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio');



Route::get('/userDataCli/{user}', [UserController::class, 'editcli'])->name('editUserCli');
//call to the updatecli function of the UserSessionController controller with the name updateUserCli
Route::post('/updateUserCli', [UserController::class, 'updatecli'])->name('updateUserCli');
//call to the deletecli function of the UserSessionController controller with the name deleteUserCli
Route::post('/deleteUserCli', [UserController::class, 'deletecli'])->name('deleteUserCli');
//returns back to the view.
Route::post('/inicio', [UserController::class, 'back'])->name('backInicio');



//2.This the registration part, from sending the mail for the confirmation link and then the registration of the user in the database.

//Route to check if the data inserted in the registration form allready exists on the Db or doesn't exists.
Route::post('/register', [UserRegisterController::class, 'check'])->name('registerUser');

//Route to change the verified attribute in the DB for the user.
Route::get('/register/confirmation', [UserRegisterController::class, 'confirmation'])->name('confirmation');



//3.This part is everything from the forgotPassword event, from sending the message to the resetPassword view.

//Route for sending the ForgotPassword mail.
Route::post('/reset', [ResetEmail::class, 'send'])->name('resetMail');

Route::get('/reset/resetForm', [ResetEmail::class, 'return'])->name('resetForm');

//Route to update the password and save it.
Route::post('/reset/resetForm/update', [ResetEmail::class, 'reset'])->name('resetUpdatePassword');

//Route for the view of the resetPassword form.
Route::get('/reset/resetForm/update', function(){
    return view('resetPassword');
})->name('ResetFormulario');



//4.This part is for the language.

//Route to change the languages of the Pages.
Route::get('lang/{lang}', [LanguageController::class, '__invoke'])->name('lang.swap');



//5.This part is after the user login

//Add friends.
Route::post('/addFriend/{id}', [UserController::class, 'addFriend'])->name('addFriend');


/*Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
