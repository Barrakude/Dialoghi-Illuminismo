<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Rotta principale
Route::get('/', fn() => view('welcome'))->name('home');

// Rotta per visualizzare un articolo
Route::get('/article', [ArticleController::class, 'show'])->name('article.show');

// Rotte per le varie pagine
$pages = [
    'genereSatirico' => 'genereSatirico',
    'dialetticaNaturaCultura' => 'dialetticaNaturaCultura',
    'mitoDelBuonSelvaggio' => 'mitoDelBuonSelvaggio',
    'laQuestioneFemminile' => 'laQuestioneFemminile',
    'felicitàVirtù' => 'felicitàVirtù',
    'laFiguraDellaDonnaSettecento' => 'laFiguraDellaDonnaSettecento',
    'IlRaccontoFilosofico' => 'IlRaccontoFilosofico',
    'illusioneRealtà' => 'illusioneRealtà'
];

foreach ($pages as $name => $view) {
    Route::get("/$view", fn() => view($view))->name($name);
}
