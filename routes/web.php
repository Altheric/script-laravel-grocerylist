<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', function () {})->name('items.store');
Route::get('/items/{id}', function () {})->name('items.show');
Route::get('/items/{id}/edit', function () {})->name('items.edit');
Route::put('/items/{id}', function () {})->name('items.update');
Route::delete('/items/{id}', function () {})->name('items.destroy');
