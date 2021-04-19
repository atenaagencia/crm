<?php

use App\Http\Livewire\Users\ShowUsers;
use App\Http\Livewire\Users\CreateUser;
use App\Http\Livewire\Users\ProfileUser;
use Illuminate\Support\Facades\Route;

Route::get('/user', ShowUsers::class)->middleware(['auth'])->name('user.index');
Route::get('/user/create', CreateUser::class)->middleware(['auth'])->name('user.create');
Route::get('/profile/{id}', ProfileUser::class)->middleware(['auth'])->name('user.profile');
