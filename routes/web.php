<?php

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

Route::get('/', [HomeUserController::class, 'index'])->name('landingPage.index');
Route::get('/about', [HomeUserController::class, 'about']);
Route::get('/services', [HomeUserController::class, 'service']);

Route::get('/loginUser', function () {
    return view('landingPage/login');
});

Route::get('/form', function () {
    return view('landingPage/micro/form');
});


Route::get('/dashboard', function () {
    return view('admin/page/dashboard');
});
Route::get('/agent', function () {
    return view('admin/page/data/agent');
});
Route::get('/perumahan', function () {
    return view('admin/page/data/perumahan');
});
Route::get('/pembangunan', function () {
    return view('admin/page/data/pembangunan');
});
