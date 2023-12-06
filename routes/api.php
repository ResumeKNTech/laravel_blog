<?php

use App\Http\Controllers\Api\Vue\CompletePostController;
use App\Http\Controllers\Api\Vue\PostController;
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
    function(){
        Route::apiResource('/posts', PostController::class);
        Route::patch('/posts/{post}/complete', CompletePostController::class);
    }
);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
