<?php

use App\Http\Controllers\Api\Vue\CompletePostController;
use App\Http\Controllers\Api\Vue\CompletePostCategoryController;
use App\Http\Controllers\Api\Vue\CompletePostTagController;
use App\Http\Controllers\Api\Vue\CompletePostCommentController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;

use App\Http\Controllers\Api\Vue\PostCategoryController;
use App\Http\Controllers\Api\Vue\PostController;
use App\Http\Controllers\Api\Vue\PostTagController;
use App\Http\Controllers\Api\Vue\PostCommentController;


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


Route::middleware('auth:sanctum')->prefix('vue')->group(
    function () {
        // TODO Post
        Route::apiResource('/posts', PostController::class);
        Route::patch('/posts/{post}/complete', CompletePostController::class);

        //TODO Post Category
        Route::apiResource('/posts_category', PostCategoryController::class);
        Route::patch('/posts_category/{posts_category}/complete', CompletePostCategoryController::class);

        // TODO Post Tag
        Route::apiResource('/posts_tag', PostTagController::class);
        Route::patch('/posts_tag/{posts_tag}/complete', CompletePostTagController::class);
        //TODO Post Comment
        Route::apiResource('/posts_comment', PostCommentController::class);
        Route::patch('/posts_comment/{posts_comment}/complete', CompletePostCommentController::class);
    }
);

Route::prefix('auth')->group(function () {
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');
    Route::post('/register', RegisterController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
