<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MovieController;

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
//     return view('index');
// });


Route::get('/', [MovieController::class, 'index'])->name('index');

Route::name('movie.')->group(function() {
    Route::get('/movie-add', [MovieController::class, 'add'])->name('add');
    Route::post('/movie-create', [MovieController::class, 'create'])->name('create');
    Route::get('/movie-edit/{id}', [MovieController::class, 'edit'])->name('edit');
    Route::post('/movie-update', [MovieController::class, 'update'])->name('update');
    Route::post('/movie-delete/{id}', [MovieController::class, 'delete'])->name('delete');
});

Route::name('kategori.')->group(function() {
    Route::get('/kategori', [KategoriController::class, 'index'])->name('index');
    Route::get('/kategori-create', function() {
        return view('kategori.add');
    })->name('add');
    Route::post('/kategori-create', [KategoriController::class, 'create'])->name('create');
    Route::get('/kategori-edit/{id}', [KategoriController::class, 'edit'])->name('edit');
    Route::post('/kategori-update', [KategoriController::class, 'update'])->name('update');
    Route::post('/kategori-delete/{id}', [KategoriController::class, 'delete'])->name('delete');
});