<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])->name("contact.list");

Route::get('/contact/:id', function () {
    return view('list');
})->name("contact.show");

Route::get('/contact/:id/edit', function () {
    return view('list');
})->name("contact.edit");

Route::get('/contact/:id/delete', function () {
    return view('list');
})->name("contact.edit");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
