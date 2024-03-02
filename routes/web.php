<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormKonsumenController;
use App\Http\Controllers\HomeUserController;
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
Route::get('/loginUser', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginUser', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/logout',  [AuthController::class, 'logout'])->middleware('auth');

Route::get('/', [HomeUserController::class, 'index'])->name('landingPage.index');
Route::get('/about', [HomeUserController::class, 'about']);
Route::get('/services', [HomeUserController::class, 'service']);
Route::get('/form/{id}', [HomeUserController::class, 'show']);

Route::post('/form/{id}/create', [FormKonsumenController::class, 'store']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/agent', [AdminController::class, 'agent']);
Route::post('/agent/create', [AdminController::class, 'store']);
Route::get('/perumahan', [AdminController::class, 'perumahan']);
Route::get('/pembangunan', [AdminController::class, 'pembangunan']);
