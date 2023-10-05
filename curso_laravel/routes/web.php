<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produtos/{slug}', [SiteController::class, 'details'])->name('site.details');


