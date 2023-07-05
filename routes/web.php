<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusicController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logIn', [AuthController::class, 'login'])->name('loginAcc');
Route::get('/RegisterAccount', [AuthController::class, 'register'])->name('registerAcc');
Route::get('/Fogot-pass', [AuthController::class, 'fogotpass'])->name('fogotpass');




Route::get('/', [MusicController::class, 'home'])->name('musicdash');
Route::get('/tables', [MusicController::class, 'tables'])->name('musictable');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
