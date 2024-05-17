<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function() {
    Route::get('', 'index')->name('mahasiswa');
    Route::get('insert', 'add')->name('mahasiswa.insert');
    Route::post('insert', 'insert')->name('mahasiswa.add.insert');
    Route::get('{id}/edit', 'edit')->name('mahasiswa.edit');
    Route::put('{id}/edit', 'update')->name('mahasiswa.update');
    Route::delete('{id}/delete', 'delete')->name('mahasiswa.delete');
});
