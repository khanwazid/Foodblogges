<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;

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
})->name('welcome');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/signup', function () {
    return view('register');
});








Route::middleware('auth')->group(function () {

    
    Route::get('/normal', [TempController::class, 'normal'])->name('normal');
    Route::put('/normal/update', [UserController::class, 'updateProfiles'])->name('normal.update');
    Route::post('/change-password', [UserController::class, 'changePasswords'])->name('change.passwordss');
    Route::get('/about', [TempController::class, 'about']);
    Route::get('/pagecontacts', [TempController::class, 'contact']);
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/posts', [CommentController::class, 'index'])->name('posts.index');
    Route::get('/posts/{p_id}', [CommentController::class, 'show'])->name('show.posts');
    Route::post('/posts/{postId}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

});



Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/change/password', [UserController::class, 'changePassword'])->name('admin.passwordss');

    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
    Route::get('/adminprofile',[TempController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/comments', [AdminController::class, 'shown'])->name('admin.comments.index');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profiles.update');
    Route::get('/profile/edit', [UserController::class, 'edits'])->name('profile.edit');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   
    

    //ADMIN
Route::get('admin/{id}/edit', [PostController::class, 'edit'])->name('admin.post');


Route::put('admin/{id}', [PostController::class, 'update'])->name('admin.update');
Route::delete('/admin/comments/{comment}', [AdminController::class, 'destroy'])->name('admin.comments.destroy');

Route::put('/admin/comments/{comment}', [AdminController::class, 'update'])->name('admin.comments.update');
//Route::put('posts/{p_id}', [PostController::class, 'update'])->name('post.update');

Route::get('/list/post', [PostController::class, 'index'])->name('list.post');
Route::delete('admin/{id}', [PostController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/create', [PostController::class, 'creates'])->name('admin.create');
Route::post('admin', [PostController::class, 'stores'])->name('admin.store');
Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

});
