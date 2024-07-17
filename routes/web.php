<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/politica-de-privacidad-y-cookies-de-oberstaff-com/', function () {
    return view('politicas');
});


Route::get('/terminos_y_condiciones_de_contratacion/', function () {
    return view('terminos');
});

Route::get('/precio/', function () {
    return view('precio');
});

Route::get('/proceso/', function () {
    return view('proceso');
});

Route::get('/llamada/', function () {
    return view('llamada');
});




Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
