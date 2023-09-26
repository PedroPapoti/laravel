<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);
Route::resource('teste', CategoriaController::class);