<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article/', [ArticleController::class, 'show'])->name('article.show');


Route::get('/genereSatirico', function(){ 
    return view('genereSatirico');
})->name('genereSatirico');

Route::get('/dialetticaNaturaCultura', function(){ 
    return view('dialetticaNaturaCultura');
})->name('dialetticaNaturaCultura');