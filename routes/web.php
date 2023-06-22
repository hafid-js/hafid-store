<?php

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

// Auth::routes();

// //verifikasi email user
// Auth::routes(['verify' => true]);


Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
