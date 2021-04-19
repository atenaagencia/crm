<?php

use App\Http\Livewire\Targets\IndexTargets;
use Illuminate\Support\Facades\Route;

Route::get('/target', IndexTargets::class)->middleware(['auth'])->name('target.index');
