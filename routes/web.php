<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\DegreeProgramController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index']);
Route::get('uni/{slug}',[FrontendController::class,'show'])->name('show');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('admin/login',[AdminController::class,'LoginForm']);
Route::post('admin/login',[AdminController::class,'LoginAdmin'])->name('admin-login');
Route::middleware(['auth','verified','admin'])->group(function () {
    Route::get('/admin/dashboard', [DashbaordController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth','verified','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/universities', UniversityController::class);
    Route::resource('/degree-program', DegreeProgramController::class);
});



require __DIR__.'/auth.php';
