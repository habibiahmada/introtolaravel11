<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', [GuestBookController::class, 'form'])->name('form');
Route::get('/welcom', [GuestBookController::class, 'welcome'])->name('welcome');
// Route::get('temp/master', [GuestBookController::class, 'master'])->name('temp');
Route::get('task', [GuestBookController::class, 'master'])->name('temp');


// Route untuk menampilkan form tambah genre
// dan handler atau method yang digunakan adalah method create


Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');

//proses menyimpan data genre dari form ke database
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');

// untuk menampilkan form edit data genre
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit'); 
Route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
// proses delete data
Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');



// Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
// Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
// Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
// Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
// Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
// Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy');
Route::resource('/cast', CastController::class);

Route::resource('/movie', MovieController::class);