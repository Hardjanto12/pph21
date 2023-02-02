<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dvsController;
use App\Http\Controllers\jbtController;
use App\Http\Controllers\asrController;

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
// Route::get('/template', function () {
//     return view('layout.template2');
// });
Route::resource('dvs', dvsController::class);
Route::resource('jbt', jbtController::class);
Route::resource('asr', asrController::class);
