<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Product;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route::view('product', 'livewire.product')->middleware(['auth'])->name('product');
Route::get('product', Product::class)->middleware(['auth'])->name('product');


require __DIR__.'/auth.php';
