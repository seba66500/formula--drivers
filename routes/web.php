<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/drivers', [IndexController::class, 'drivers'])->name('drivers');

Route::get('/standings', [IndexController::class, 'standings'])->name('standings');

Route::get('/penalty', [IndexController::class, 'penalty'])->name('penalty');

Route::get('/reprimends', [IndexController::class, 'reprimends'])->name('reprimends');