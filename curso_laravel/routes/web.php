<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/any',function(){
    return "Permite todo tipo de acesso http (put, delete, get, post )";
});

Route::match(['get','post'],'/match', function(){
    return "Permite apenas acessos de finidos";
});

Route::get('/produto/{id}/', function($id){
    return " O id do produto é: " .$id;

});


Route::any('/exemplo/{id}/{cat}',function($id, $cat){
    return "id do produto : " .$id. "<br>" . "A categoria é " .$cat;
    
});