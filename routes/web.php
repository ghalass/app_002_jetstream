<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Products;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/products', Products::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});