<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContributionsController;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {    return view('index');});

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/',[AuthController::class, 'landingpage'])->name("index");

Route::get('/logIn', [AuthController::class, 'login'])->name('loginAcc');
Route::get('/RegisterAccount', [AuthController::class, 'register'])->name('registerAcc');
Route::post('/Usersregister', [AuthController::class, 'registerUser'])->name('userregister');
//Route::post('/register', 'AuthController@register')->name('userregister');

Route::get('/Fogot-pass', [AuthController::class, 'fogotpass'])->name('fogotpass');
Route::post('/reset-Fogot-pass', [AuthController::class, 'resetfogotpass'])->name('changepassword');

Route::any('/updateSelfpass', [UserController::class, 'changeUsersPassword'])->name('changeUsersPassword');


Route::get('/contributions', [ContributionsController::class, 'showContribution'])->name('contributions');
Route::get('/MailTest', [ContributionsController::class, 'sendMail'])->name('sendmail');

Auth::routes();
// Route User
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::group(['prefix' => 'admins'], function() {

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

    // view music page
    Route::get('/ViewMusicPage', [MusicController::class, 'musicpage'])->name('musicpage');

    // view uploaded music
    Route::get('/ViewMusicFile/{id}', [MusicController::class, 'previewMusic'])->name('ViewMusic');

    Route::get('/Listusers', [UserController::class, 'index'])->name('users.index');
    Route::post('/update-user', [UserController::class, 'updateUser'])->name('update_user');
    Route::any('/users/{user}/change-password', [UserController::class, 'changePassword'])->name('change_password');
    Route::post('/Userregister', [UserController::class, 'registerUser'])->name('registerUser');

    });
});

Auth::routes();


// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    //Route::get("/home",[HomeController::class, 'userHome'])->name("home");
    Route::get('/usersdash', [MusicController::class, 'home'])->name('usermusicdash');
});

// Route Editor
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[HomeController::class, 'editorHome'])->name("editor.home");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
