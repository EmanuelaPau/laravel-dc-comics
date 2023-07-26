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
Route::get('/admin/comics', [AdminComicController::class, 'index'])->name('admin.comics.index');

Route::get('/admin/comics/create', [AdminComicController::class, 'create'])->name('admin.comics.create');
Route::post('/admin/comics', [AdminComicController::class, 'store'])->name('admin.comics.store');

Route::get('/admin/comics/{id}', [AdminComicController::class, 'show'])->name('admin.comics.show');
Route::get('/admin/comics/{id}/edit', [AdminComicController::class, 'edit'])->name('admin.comics.edit');

Route::put('/admin/comics/{id}', [AdminComicController::class, 'update'])->name('admin.comics.update');
Route::delete('/admin/comics/{id}', [AdminComicController::class, 'destroy'])->name('admin.comics.destroy');