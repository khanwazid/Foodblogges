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

Route::get('/welcome', function () {
    return view('welcome');
});

/*Route::get('/login', function () {
    return view('login');
})->name('login');*/
//Route::get('/home',[TempController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('signin');
})->name('signin');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
//Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');
//Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('/categories', function () {
    return view('categories-list');
});
Route::get('/reguster', function () {
    return view('register');
});
//Route::get('/list/post', [PostController::class, 'index'])->name('list.post');

Route::get('/four', function () {
    return view('four');
});
Route::get('/admin', function () {
    return view('admin');
});


//Route::get('/index', [TempController::class, 'home']);
Route::get('/about', [TempController::class, 'about']);
Route::get('/contact', [TempController::class, 'contact']);
//Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/main', function () {
    return view('main');
});
Route::get('/single', function () {
    return view('single-post');
});
Route::get('/typograohy', function () {
    return view('typography');
});
Route::get('/management', function () {
    return view('management');
});
/*Route::get('/normal', function () {
    return view('normal');
});*/


Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/normal', [TempController::class, 'normal'])->name('normal');
   // Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/normal/update', [UserController::class, 'updateProfiles'])->name('normal.update');
    Route::post('/change-password', [UserController::class, 'changePasswords'])->name('change.passwordss');





    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/index', [TempController::class, 'home'])->name('firstpage');
   // Route::get('/normal', [TempController::class, 'normal'])->name('normal');
   // Route::post('change-password', [UserController::class, 'changePasswords'])->name('change.password');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
   // Route::get('/posts/profile', [PostController::class, 'showProfile'])->name('post.profile');
  // Route::get('/profile', [UserController::class, 'profile'])->name('profile');
   //Route::put('/profile/update', [UserController::class, 'updateProfiles'])->name('profile.update');

 Route::get('/posts/{id}/edit', [UserController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [UserController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [UserController::class, 'destroy'])->name('posts.destroy');
Route::get('/home',[TempController::class, 'index'])->name('home');

//Route::get('/posts', [CommentController::class, 'show'])->name('show.posts');
//Route::get('/post/{id}', [CommentController::class, 'show'])->name('show.posts');
//Route::get('/posts/{id}', [CommentController::class, 'show'])->name('show.posts');
Route::get('/posts', [CommentController::class, 'index'])->name('posts.index');
Route::get('/posts/{p_id}', [CommentController::class, 'show'])->name('show.posts');


//Route::post('/posts/{{post:p_id}}/comments', [CommentController::class, 'store'])->name('comments.store');
//Route::get('/posts/{post:p_id}', [CommentController::class, 'show'])->name('show.posts'); // View post and comments and changed the route name posts.show to show.post

//Route::get('/posts', [CommentController::class, 'show'])->name('show.posts');
Route::post('/posts/{postId}/comments', [CommentController::class, 'store'])->name('comments.store');
//Route::get('/posts/{post:p_id}', [CommentController::class, 'show'])->name('show.posts');


//Route::post('/posts/{postId}/comments', [CommentController::class, 'store'])->name('comments.store');
//Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

});



Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/change/password', [UserController::class, 'changePassword'])->name('admin.passwordss');

    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
    Route::get('/adminprofile',[TempController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/comments', [AdminController::class, 'shown'])->name('admin.comments.index');
    Route::put('/admin/comments/{comment}', [AdminController::class, 'update'])->name('admin.comments.update');
    Route::delete('/admin/comments/{comment}', [AdminController::class, 'destroy'])->name('admin.comments.destroy');
//Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profiles.update');
Route::get('/profile/edit', [UserController::class, 'edits'])->name('profile.edit');
Route::delete('/users/{user}', [UserController::class, 'delete'])->name('users.destroy');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


    //ADMIN
Route::get('admin/{id}/edit', [PostController::class, 'edit'])->name('admin.post');

// Route for updating a post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::put('admin/{id}', [PostController::class, 'update'])->name('admin.update');
//Route::put('posts/{p_id}', [PostController::class, 'update'])->name('post.update');

Route::get('/list/post', [PostController::class, 'index'])->name('list.post');
Route::delete('admin/{id}', [PostController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/create', [PostController::class, 'creates'])->name('admin.create');
Route::post('admin', [PostController::class, 'stores'])->name('admin.store');
Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

});

//Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
//Route::get('/posts/{post}', [CommentController::class, 'show'])->name('show.posts'); // View post and comments and changed the route name posts.show to show.post



/*Route::get('/comments', function () {
    return view('comments');
});*/