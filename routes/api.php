<?php

use App\Http\Controllers\Api\AccessTokensController;
use App\Http\Controllers\Api\CommentsController;
use App\Http\Controllers\Api\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',[PostsController::class, 'index']);
Route::get('/comments',[CommentsController::class, 'index']);
Route::post('/comments/{post_id}/create', [CommentsController::class, 'store']);

Route::post('/posts/create',[PostsController::class, 'store']);
Route::put('/posts/update/{post}', [PostsController::class, 'update']);
Route::delete('/posts/delete/{post}', [PostsController::class, 'delete']);

Route::post('auth/access-tokens', [AccessTokensController::class, 'store'])
    ->middleware('guest:sanctum');

Route::delete('auth/access-tokens/{token?}', [AccessTokensController::class, 'destroy'])
->middleware('auth:sanctum');
