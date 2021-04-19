<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Niches\{
IndexNiches,
CreateNiche,
EditNiche,
};

Route::get('/niche', IndexNiches::class)->middleware(['auth'])->name('niche.index');
Route::get('/niche/create', CreateNiche::class)->middleware(['auth'])->name('niche.create');
