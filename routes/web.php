<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    UserController,
    TargetController,
    NicheController
};

Route::get('/', function () {
    return view('auth.login');
})->middleware(['guest']);

Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('/user', UserController::class)->middleware(['auth']);
Route::resource('/target', TargetController::class)->middleware(['auth']);
Route::resource('/niche', NicheController::class)->middleware(['auth']);

require __DIR__.'/auth/auth.php';

