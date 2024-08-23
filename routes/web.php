<?php

use Illuminate\Support\Facades\Route;

Route::get('/items', function () {})->name('items.index');
Route::get('/items/create', function () {})->name('items.create');
Route::post('/items', function () {})->name('items.store');
Route::get('/items/{id}', function () {})->name('items.show');
Route::get('/items/{id}/edit', function () {})->name('items.edit');
Route::put('/items/{id}', function () {})->name('items.update');
Route::delete('/items/{id}', function () {})->name('items.destroy');

// We voegen ook een redirect toe aan de routes die de hoofdpagina doorverwijst naar de '/items' route
Route::redirect('/', '/items');