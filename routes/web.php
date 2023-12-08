<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditorBlogController;
use App\Http\Controllers\EditorStyleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StyleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome-laravel', function () {
    return view('welcome');
});
// Route::get('/ilham', function() {
//     echo "Saya Siswa";
// });
Route::get('/guru', function(){
    return view('guru');
});
Route::get('/data_guru', function(){
    return view('data_guru');
});          
Route::get('/data_siswa', function(){
    return view('data_siswa');
});
Route::get('/data_blog', function(){
    return view('data_blog');
});


Route::get('/', [BlogController::class, 'user']);

Route::middleware(['cekLogin'])->group(function(){

    Route::resource('/admin/posts', BlogController::class);
    
    Route::resource('/admin/style', StyleController::class);
    
    Route::resource('/admin/about', AboutController::class);
    
    Route::get('/admin', [BlogController::class, 'dashboard']);
});


// Route::middleware(['userAkses:editor', 'cekLogin'])->group(function(){

//     Route::resource('/admin/editor/posts', EditorBlogController::class);
    
//     Route::resource('/admin/editor/style', EditorStyleController::class);
    
//     Route::get('/admin/editor', [EditorBlogController::class, 'dashboard']);
// });


// Route::get('/admin/editor/posts', [BlogController::class, 'editor'])->middleware('cekLogin', 'userAkses:editor');
// Route::post('/admin/editor/posts/proses-create', [BlogController::class, 'storeEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/posts/create', [BlogController::class, 'createEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::post('/admin/editor/posts/proses-edit/{id}', [BlogController::class, 'updateEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/posts/edit/', [BlogController::class, 'editEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/posts/show/{id}', [BlogController::class, 'showEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/posts/destroy/{id}', [BlogController::class, 'destroyEditor'])->middleware('cekLogin', 'userAkses:editor');

// Route::get('/admin/editor/style', [StyleController::class, 'editor'])->middleware('cekLogin', 'userAkses:editor');
// Route::post('/admin/editor/style/proses-create', [StyleController::class, 'storeEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/style/create', [StyleController::class, 'createEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::post('/admin/editor/style/proses-edit', [StyleController::class, 'updateEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/style/edit/{id}', [StyleController::class, 'editEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/style/show/{id}', [StyleController::class, 'showEditor'])->middleware('cekLogin', 'userAkses:editor');
// Route::get('/admin/editor/style/destroy/{id}', [StyleController::class, 'destroyEditor'])->middleware('cekLogin', 'userAkses:editor');

// Route::get('/admin/editor', [BlogController::class, 'dashboardEditor'])->middleware('cekLogin', 'userAkses:editor');


Route::get('/about',[AboutController::class, 'about']);

Route::get('/style', [StyleController::class, 'style']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/style/{id}', [BlogController::class, 'tampil'])->name('style');

Route::get('/styles/{id}', [StyleController::class, 'styles'])->name('styles');


Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('cekUserLogin');

Route::post('/admin/login-proses', [LoginController::class, 'login'])->middleware('cekUserLogin');

Route::get('/admin/logout', [LoginController::class, 'logout'])->middleware('cekLogin');

// Route::get('/admin/register', [RegisterController::class, 'index']);

// Route::post('/admin/register-proses', [RegisterController::class, 'registerPost']);


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register-proses', [AuthController::class, 'registerPost'])->name('register-proses');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-proses', [AuthController::class, 'loginPost'])->name('login-proses');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home2', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/privacy-policy', function(){
    return view('privacy_policy');
});