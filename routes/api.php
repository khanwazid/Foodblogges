<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->group(function () {
   // Route::post('/posts', [PostController::class, 'store']);
   // Route::post('/logout', [AuthController::class, 'logout']);
   // Route::put('/posts/{id}', [PostController::class, 'update']);
    Route::put('/user/profile', [AuthController::class, 'updateProfile']);
 //   Route::delete('/posts/{id}', [PostController::class, 'delete']);
    Route::get('/admin-posts', [PostController::class, 'getAdminPosts']);
    Route::post('/comments', [PostController::class, 'stores']);
    Route::put('/comments/{id}', [PostController::class, 'updateComment']);
    Route::post('contacts', [PostController::class, 'storeComment']);

});
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/admin/comments', [PostController::class, 'index']);
    Route::get('contacts', [PostController::class, 'indexContact']);
    Route::get('contacts/{id}', [PostController::class, 'show']);
    Route::get('/user/posts', [PostController::class, 'getOwnPosts']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{id}', [PostController::class, 'update']);
    Route::delete('/posts/{id}', [PostController::class, 'delete']);
   // Route::delete('/posts/{id}', [PostController::class, 'delete']);
});


