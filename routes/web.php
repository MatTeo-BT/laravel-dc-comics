<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/', function () {
    return view('comics.create');
});

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comic.show');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
