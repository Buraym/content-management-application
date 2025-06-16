<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/contact')->group(function(){
    Route::post('/store', [ContactController::class, 'store'])->name("contact.store");
    Route::put('/{id}/edit', [ContactController::class, 'update'])->name("contact.update");
    Route::delete('/{id}/destroy', [ContactController::class, 'destroy'])->name("contact.destroy");
});


