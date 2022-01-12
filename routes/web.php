<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetEmail;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\SupportMail;

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

Route::get('/onProcess', function(){ 
    return view('onProcess');
})->name('onProcess');

Route::post('/reset', [ResetEmail::class, 'send'])->name('resetMail');

Route::post('/register', [UserRegisterController::class, 'store'])->name('registerUser');

Route::get('lang/{lang}', [LanguageController::class, '__invoke'])->name('lang.swap');

