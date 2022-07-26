<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::controller(TodoController::class)->group(function () {
    Route::get('todos', 'index');
    Route::post('todo', 'store');
    Route::get('todo/{id}', 'show');
    Route::put('todo/{id}', 'update');
    Route::delete('todo/{id}', 'destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::post('users', 'store');
    Route::get('users/{id}', 'show');
    Route::put('users/{id}', 'update');
    Route::delete('users/{id}', 'destroy');
});

Route::controller(BoardController::class)->group(function () {
    Route::get('boards', 'index');
    Route::post('boards', 'store');
    Route::get('boards/{id}', 'show');
    Route::put('boards/{id}', 'update');
    Route::delete('boards/{id}', 'destroy');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('boards/{board_id}/tasks', 'index');
    Route::get('boards/{board_id}/tasks/{task_id}', 'show');
    Route::post('boards/{board_id}/tasks', 'store');
    Route::put('boards/{board_id}/tasks/{task_id}', 'update');
    Route::delete('boards/{board_id}/tasks/{task_id}', 'destroy');
});
