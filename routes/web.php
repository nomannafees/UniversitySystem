<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\FrontendController::class,'index']);
Route::get('/show',[\App\Http\Controllers\FrontendController::class,'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/universities', \App\Http\Controllers\UniversityController::class);
    Route::resource('/degree-program', \App\Http\Controllers\DegreeProgramController::class);
});

require __DIR__.'/auth.php';
