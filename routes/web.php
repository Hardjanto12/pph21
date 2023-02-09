<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asrController;
use App\Http\Controllers\dvsController;
use App\Http\Controllers\jbtController;
use App\Http\Controllers\kryController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;

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
    return view('welcome');
});


Route::resource('dvs', dvsController::class)->middleware('auth');
Route::resource('jbt', jbtController::class)->middleware('auth');
Route::resource('asr', asrController::class)->middleware('auth');
Route::resource('kry', kryController::class, ['title' => 'Karyawan'])->middleware('auth');


Route::get('register', [registerController::class, 'index'])->name('register');
Route::post('register', [registerController::class, 'store']);

Route::get('login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [loginController::class, 'authenticate']);
Route::get('logout', [loginController::class, 'logout'])->name('logout.logout');

Route::get('home', [homeController::class, 'index'])->name('home')->middleware('auth');
