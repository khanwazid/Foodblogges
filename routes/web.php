<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/login', function () {
    return view('login');
})->name('login');*/
Route::get('/home',[TempController::class, 'index'])->name('home');
Route::get('/signin', function () {
    return view('signin');
});
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
//Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/about', function () {
    return view('about');
});
Route::get('/categories', function () {
    return view('categories-list');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/four', function () {
    return view('four');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/single', function () {
    return view('single-post');
});
Route::get('/typograohy', function () {
    return view('typography');
});