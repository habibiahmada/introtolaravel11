<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuestBookController;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', [GuestBookController::class, 'form'])->name('form');
Route::get('/welcom', [GuestBookController::class, 'welcome'])->name('welcome');
Route::get('temp/master', [GuestBookController::class, 'master'])->name('temp');
?>