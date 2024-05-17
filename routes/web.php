<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function() {
    Route::get('', 'index')->name('mahasiswa');
});
