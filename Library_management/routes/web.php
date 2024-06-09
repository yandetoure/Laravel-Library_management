<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/show', [CategorieController::class, 'index'])->name('show');
    Route::get('/create', [CategorieController::class, 'create'])->name('create');
    Route::post('/', [CategorieController::class, 'store'])->name('store');
    Route::get('/{categorie}/edit', [CategorieController::class, 'edit'])->name('edit');
    Route::put('/{categorie}', [CategorieController::class, 'update'])->name('update');
    Route::delete('/{categorie}', [CategorieController::class, 'destroy'])->name('destroy');
});
Route::prefix('autors')->name('autors.')->group(function () {
    Route::get('/show', [AutorController::class, 'index'])->name('show');
    Route::get('/create', [AutorController::class, 'create'])->name('create');
    Route::post('/', [AutorController::class, 'store'])->name('store');
    Route::get('/{autor}/edit', [AutorController::class, 'edit'])->name('edit');
    Route::put('/{autor}', [AutorController::class, 'update'])->name('update');
    Route::delete('/{autor}', [AutorController::class, 'destroy'])->name('destroy');
});