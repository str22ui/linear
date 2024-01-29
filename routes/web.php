<?php

use App\Http\Controllers\LandingPageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
// Route::get('/makanan', [HomeController::class, 'makanan'])->name('makanan.index');
Route::get('/about', function () {
    return view('landingPage/content/aboutUs');
});
Route::get('/services', function () {
    return view('landingPage/content/services');
});

Route::get('/loginUser', function () {
    return view('landingPage/login');
});


Route::get('/dashboard', function () {
    return view('admin/page/dashboard');
});
Route::get('/perumahan', function () {
    return view('admin/page/data/perumahan');
});
Route::get('/pembangunan', function () {
    return view('admin/page/data/pembangunan');
});
