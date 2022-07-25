<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\ColumnController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
   // return view('welcome');
});*/

Route::get('/', [MainController::class, 'index'])->name('home');

Route::resource('boards', BoardController::class);
Route::resource('columns', ColumnController::class);
Route::resource('tasks', TaskController::class);

