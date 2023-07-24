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
Route::resource('/admin/movies', AdminComicController::class);
// Route::get('/admin/movies', [AdminMovieController::class, 'index'])->name('admmin.movie.index');
// Route::get('/admin/movies/{id}', [AdminMovieController::class, 'show'])->name('admmin.movie.show');