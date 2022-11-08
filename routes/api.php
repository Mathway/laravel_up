<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/post','App\Http\Controllers\PostController@index');
use App\Http\Controllers\PostController;
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);
Route::patch('/post/{post}', [PostController::class, 'update']);
Route::delete('/post/{post}', [PostController::class, 'destroy']);

Route::get('/request','App\Http\Controllers\RequestController@index');
use App\Http\Controllers\RequestController;
Route::get('/request/{id}', [RequestController::class, 'show']);
Route::post('/request', [RequestController::class, 'store']);
Route::patch('/request/{post}', [RequestController::class, 'update']);
Route::delete('/request/{post}', [RequestController::class, 'destroy']);

Route::get('/category','App\Http\Controllers\CategoryController@index');
use App\Http\Controllers\CategoryController;
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/category', [CategoryController::class, 'store']);
Route::patch('/category/{post}', [CategoryController::class, 'update']);
Route::delete('/category/{post}', [CategoryController::class, 'destroy']);

Route::get('/notices','App\Http\Controllers\NoticesController@index');
use App\Http\Controllers\NoticesController;
Route::get('/notices/{id}', [NoticesController::class, 'show']);
Route::post('/notices', [NoticesController::class, 'store']);
Route::patch('/notices/{post}', [NoticesController::class, 'update']);
Route::delete('/notices/{post}', [NoticesController::class, 'destroy']);

Route::get('/subdivision','App\Http\Controllers\SubdivisionController@index');
use App\Http\Controllers\SubdivisionController;
Route::get('/subdivision/{id}', [SubdivisionController::class, 'show']);
Route::post('/subdivision', [SubdivisionController::class, 'store']);
Route::patch('/subdivision/{post}', [SubdivisionController::class, 'update']);
Route::delete('/subdivision/{post}', [SubdivisionController::class, 'destroy']);

Route::get('/user','App\Http\Controllers\UserController@index');
use App\Http\Controllers\UserController;
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
Route::patch('/user/{post}', [UserController::class, 'update']);
Route::delete('/user/{post}', [UserController::class, 'destroy']);
