<?php

use App\Http\Controllers\todocontroller;
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

Route::get('/', [todocontroller::class, 'index']);
Route::get('create', [TodoController::class, 'create']);
Route::get('details/{todo}', [TodoController::class, 'details']);
Route::get('edit/{todos}', [TodoController::class, 'edit']);
Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::post('update/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::post('store-data', [TodoController::class, 'store']);