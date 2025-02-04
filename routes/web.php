<?php

declare(strict_types=1);

use App\Livewire\CardIndex;
use App\Livewire\SetIndex;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/sets', SetIndex::class)->name('set.index');
    Route::get('/cards', CardIndex::class)->name('card.index');
});
