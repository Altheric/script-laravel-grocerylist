<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', function () {})->name('items.store');
Route::get('/items/{id}', function () {})->name('items.show');
Route::get('/items/{id}/edit', function () {})->name('items.edit');
Route::put('/items/{id}', function () {})->name('items.update');
Route::delete('/items/{id}', function () {})->name('items.destroy');

// We voegen ook een redirect toe aan de routes die de hoofdpagina doorverwijst naar de '/items' route
Route::redirect('/', '/items');

// Route voor de indexpagina van items
Route::get('/items', function () {
    return view('items.index');
})->name('items.index');

// Route voor de creatiepagina van items
Route::get('/items/create', function () {
    return view('items.create');
})->name('items.create');