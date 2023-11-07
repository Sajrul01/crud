<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;

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

Route::get('/', [AddController::class, 'index'])->name('index');
Route::POST('/', [AddController::class, 'create'])->name('create');
Route::get('/edit/{id}', [AddController::class, 'edit'])->name('edit');
Route::PUT('/edit/{id}', [AddController::class, 'update'])->name('update');
Route::get('/delete/{id}', [AddController::class, 'destroy'])->name(' destroy');



