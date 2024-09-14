<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ResidentController;
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

Route::redirect('/', '/home');

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/home', 'index')->name('home.index');
    Route::get('/e-catalog', 'catalog')->name('home.catalog');
    Route::get('/simpan-pinjam', 'simpanPinjam')->name('home.simpanPinjam');
    Route::get('/data-masyarakat', 'dataMasyarakat')->name('home.dataMasyarakat');
});

// CATEGORY
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/detail', [CategoryController::class, 'show'])->name('category.show');
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

// RESIDENT (PENDATAAN MASYARAKAT)
Route::get('/residents', [ResidentController::class, 'index'])->name('resident.index');
Route::post('/resident/store', [ResidentController::class, 'store'])->name('resident.store');
Route::get('/resident/{resident}/detail', [ResidentController::class, 'show'])->name('resident.show');
Route::put('/resident/{resident}/update', [ResidentController::class, 'update'])->name('resident.update');
Route::delete('/resident/{resident}/delete', [ResidentController::class, 'destroy'])->name('resident.delete');
