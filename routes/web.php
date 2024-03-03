<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PerumahanController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',  [AuthController::class, 'logout']);

    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/dashAgent', [AdminController::class, 'dashAgent'])->middleware('userAkses:admin');
    Route::get('/agent', [AdminController::class, 'agent'])->middleware('userAkses:admin');
    Route::post('/agent/create', [AdminController::class, 'store'])->middleware('userAkses:admin');
    Route::post('/agent/{id}', [AdminController::class, 'editAgent'])->middleware('userAkses:admin');
    Route::post('/agent/update/{id}', [AdminController::class, 'updateAgent']);
    Route::delete('/agent/{id}', [AdminController::class, 'deleteAgent'])->middleware('userAkses:admin');

    Route::get('/dashPerumahan', [AdminController::class, 'dashPerumahan'])->middleware('userAkses:admin');
    Route::get('/perumahan', [AdminController::class, 'perumahan'])->middleware('userAkses:admin');
   


    Route::get('/dashKonsumen', [AdminController::class, 'dashKonsum'])->middleware('userAkses:admin');
    Route::get('/pembangunan', [AdminController::class, 'pembangunan'])->middleware('userAkses:admin');

    Route::post('/perumahan/create', [PerumahanController::class, 'store']);
    Route::post('/perumahan/{id}', [AdminController::class, 'editPerumahan'])->middleware('userAkses:admin');
    Route::post('/perumahan/update/{id}', [AdminController::class, 'updatePerumahan']);
    Route::delete('/perumahan/{id}', [AdminController::class, 'deletePerumahan'])->middleware('userAkses:admin');
});

Route::get('/loginUser', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginUser', [AuthController::class, 'authenticate']);

Route::get('/', [HomeUserController::class, 'index'])->name('landingPage.index');
Route::get('/about', [HomeUserController::class, 'about']);
Route::get('/services', [HomeUserController::class, 'service']);
Route::get('/form/{id}', [HomeUserController::class, 'show']);

Route::get('/download-brosur/{id}', [PerumahanController::class, 'downloadBrosur'])->name('download.brosur');

Route::post('/form/{id}/create', [KonsumenController::class, 'store']);
