<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as AdminComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('guest.index');
// Route::resource('/admin/comics', AdminComicController::class);
Route::get('/admin/comics', [AdminComicController::class, 'index'])->name('admmin.comic.index');
Route::get('/admin/comics/create', [AdminComicController::class, 'create'])->name('admmin.comic.create');
Route::post('/admin/comics/store', [AdminComicController::class, 'create'])->name('admmin.comic.store');
Route::get('/admin/comics/{id}', [AdminComicController::class, 'show'])->name('admmin.comic.show');