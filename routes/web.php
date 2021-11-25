<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//usando livewire
use App\Http\Livewire\{
    Posts
};

//Usando resource 
Route::resource('post', PostController::class);

//usando livewire
Route::get('postagem', Posts::class)->middleware(['auth:sanctum', 'verified']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
