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

Route::post('/reset', [ResetEmail::class, 'send'])->name('resetMail');

Route::post('/login', [UserSessionController::class, 'store'])->name('loginUser');

Route::post('/login/logout', [UserSessionController::class], 'logout')->name('logout');

Route::post('/register', [UserRegisterController::class, 'store'])->name('registerUser');

Route::post('/register/confirmation', [UserRegisterController::class, 'registro'])->name('confirmation');

Route::get('lang/{lang}', [LanguageController::class, '__invoke'])->name('lang.swap');


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
