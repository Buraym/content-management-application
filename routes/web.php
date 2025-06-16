<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])->name("contact.list");

Route::prefix("/contact")->group(function(){
    Route::get('/create', [ContactController::class, 'create'])->name("contact.create");
    Route::get('/{id}', [ContactController::class, 'show'])->name("contact.show");
    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name("contact.edit");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
