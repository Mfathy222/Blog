<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts.store', [PostsController::class, 'store']);
Route::post('/{post}/comments', [CommentsController::class, 'store'])
->name('comments.store');






//middlware
Route::middleware('guest')->group(function () {
    //auth
    //register
    Route::get('register', [AuthController::class, 'registerform']);
    Route::post('register', [AuthController::class, 'register']);

    //loin
    Route::get('login', [AuthController::class, 'loginform']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    //logout
    Route::post('logout', [AuthController::class, 'logout']);
    Route::delete('posts/{id}', [PostsController::class, 'delete']);
    Route::get('/posts/edit/{id}', [PostsController::class, 'edit']);
    Route::put('/posts/{id}', [PostsController::class, 'update']);
});
