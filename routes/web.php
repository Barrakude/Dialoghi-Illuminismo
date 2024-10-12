<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Rotta principale
Route::get('/', fn() => view('welcome'))->name('home');

// Rotta per visualizzare un articolo
Route::get('/article', [ArticleController::class, 'show'])->name('article.show');

// Definizione delle pagine
$pages = [
    'genereSatirico' => 'genereSatirico',
    'dialetticaNaturaCultura' => 'dialetticaNaturaCultura',
    'mitoDelBuonSelvaggio' => 'mitoDelBuonSelvaggio',
    'laQuestioneFemminile' => 'laQuestioneFemminile',
    'felicitàVirtù' => 'felicitàVirtù',
    'laFiguraDellaDonnaSettecento' => 'laFiguraDellaDonnaSettecento',
    'IlRaccontoFilosofico' => 'IlRaccontoFilosofico',
    'illusioneRealtà' => 'illusioneRealtà',

];

// Funzione per generare le rotte dinamicamente
function createPageRoutes(array $pages)
{
    foreach ($pages as $name => $view) {
        Route::get("/$view", fn() => view($view))->name($name);
    }
}

// Creazione delle rotte per le varie pagine
createPageRoutes($pages);
