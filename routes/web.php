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

Route::get('/administrator', function(){
    return view('administrator');
})->name('administrator');

Route::get('/reset/resetFormulario', function(){
    return view('resetPassword');
})->name('ResetFormulario');

Route::get('/profile', function(){
    return view('profile');
})->name('profilePage');

Route::post('/login', [UserSessionController::class, 'store'])->name('loginUser');

Route::post('/login/logout', [UserSessionController::class], 'logout')->name('logout');

Route::post('/register', [UserRegisterController::class, 'store'])->name('registerUser');

Route::get('/register/confirmation', [UserRegisterController::class, 'registro'])->name('confirmation');

Route::post('/reset', [ResetEmail::class, 'send'])->name('resetMail');

Route::get('/reset', [ResetEmail::class, 'resetForm'])->name('resetMailForm');

Route::post('/updateUser', [UserSessionController::class, 'update'])->name('updateUser');

Route::post('/deleteUser', [UserSessionController::class, 'delete'])->name('deleteUser');

Route::get('/userData/{id}', [UserSessionController::class, 'edit'])->name('editUser');

Route::get('lang/{lang}', [LanguageController::class, '__invoke'])->name('lang.swap');


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
