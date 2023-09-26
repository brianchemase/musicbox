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
Route::get('/musiclist', [MusicController::class, 'tables'])->name('musiclist');
Route::get('/tables', [MusicController::class, 'tables'])->name('musictable');
Route::get('/blank', [MusicController::class, 'blank'])->name('blankpage');
Route::get('/forms', [MusicController::class, 'form'])->name('formpage');

// view available music
Route::get('/ViewUploadedMusic', [MusicController::class, 'available_music'])->name('availableMusic');

//
// my contributions view available music
Route::get('/ViewmyUploadedMusic', [MusicController::class, 'my_available_music'])->name('myavailableMusic');

// upload
Route::get('/UploadMusicform', [MusicController::class, 'upload_music'])->name('uploadmusicform');
Route::post('/SaveUploadMusicform', [MusicController::class, 'storeMusicSubmission'])->name('storeSubmission');//save submission


// submit a request
Route::get('/SubmitRequestform', [MusicController::class, 'requests_submition'])->name('requestform');

// upload music attempt
Route::get('/SubmitAttempt', [MusicController::class, 'upload_attempt'])->name('musicattempt');

// user profile
Route::get('/UserProfile', [MusicController::class, 'user_profile'])->name('userprofilepage');

// user profile
Route::get('/ViewMusicPage', [MusicController::class, 'musicpage'])->name('musicpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
