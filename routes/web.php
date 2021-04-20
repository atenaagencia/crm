<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    UserController,
    TargetController,
    NicheController,
    RecordController
};

Route::get('/', function () {
    return view('auth.login');
})->middleware(['guest']);

Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard',[HomeController::class, 'reset'])->middleware(['auth'])->name('reset.password');
Route::get('/reset',[HomeController::class, 'resetPassword'])->middleware(['auth'])->name('resetPassword');
Route::resource('/user', UserController::class)->middleware(['auth']);
Route::resource('/target', TargetController::class)->middleware(['auth']);
Route::resource('/niche', NicheController::class)->middleware(['auth']);
Route::resource('/record', RecordController::class)->middleware(['auth']);

require __DIR__.'/auth/auth.php';

