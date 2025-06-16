<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contact/store', [ContactController::class, 'store'])->name("contact.store");

Route::delete('/contact/destroy', [ContactController::class, 'destroy'])->name("contact.destroy");
