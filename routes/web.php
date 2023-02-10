<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\selectController;
use App\Http\Controllers\asrController;
use App\Http\Controllers\dvsController;
use App\Http\Controllers\jbtController;
use App\Http\Controllers\kryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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

Route::get('/dvs/selectdvs', [selectController::class, 'selectdvs'])->middleware('auth');
Route::get('/asr/selectasr', [selectController::class, 'selectasr'])->middleware('auth');
Route::get('/jbt/selectjbt', [selectController::class, 'selectjbt'])->middleware('auth');

/* A shortcut for the following routes: */
Route::resource('dvs', dvsController::class)->middleware('auth');
Route::resource('jbt', jbtController::class)->middleware('auth');
Route::resource('asr', asrController::class)->middleware('auth');
Route::resource('kry', kryController::class)->middleware('auth');


/* A route to register page. */
Route::get('register', [registerController::class, 'index'])->name('register');
Route::post('register', [registerController::class, 'store']);

/* A route to login page. */
Route::get('login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [loginController::class, 'authenticate']);
/* A route to logout page. */
Route::get('logout', [loginController::class, 'logout'])->name('logout.logout')->middleware('auth');

/* A route to change password. */
Route::get('changepassword', [registerController::class, 'changepassword'])->name('changepassword')->middleware('auth');
Route::post('changepassword', [registerController::class, 'updatepassword'])->middleware('auth');

/* A route to home page. */
Route::get('home', [homeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/', [homeController::class, 'index'])->name('home')->middleware('auth');
