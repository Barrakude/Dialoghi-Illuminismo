<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BiographiesController;

// Rotta principale
Route::get('/', fn() => view('welcome'))->name('home');


Route::get('/home-biographies', [BiographiesController::class, 'homeBiographies'])->name('homeBiographies');
Route::get('/biographies/{viewName}', [BiographiesController::class, 'show']);


// Rotta per visualizzare un articolo
Route::get('/article', [ArticleController::class, 'show'])->name('article.show');



// Definizione delle pagine
$pages = [
    'homeBiographies' => 'homeBiographies',
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
foreach ($pages as $route => $view) {
    Route::get("/{$route}", fn() => view($view))->name($route);
}

// Definizione delle pagine nella cartella biographies
$biographies = [
    'jonathanSwift' => 'biographies.jonathanSwift',
    'parini' => 'biographies.parini',
    'voltaire' => 'biographies.voltaire',
    'antonioGenovesi' => 'biographies.antonioGenovesi',
    'hobbes' => 'biographies.hobbes',
    'locke' => 'biographies.locke',
    'rousseau' => 'biographies.rousseau',
    'bartolomèDeLasCasas' => 'biographies.bartolomèDeLasCasas',
    'diderot' => 'biographies.diderot',
    'montaigne' => 'biographies.montaigne',
    'condorcet' => 'biographies.condorcet',
    'deGouges' => 'biographies.deGouges',
    'wollstonecraft' => 'biographies.wollstonecraft',
    'bernardMandeville' => 'biographies.bernardMandeville',
    'jeanPastrè' => 'biographies.jeanPastrè',
    'laMettrie' => 'biographies.laMettrie',
    'montesquieu' => 'biographies.montesquieu',
    'choderlosDeLaclos' => 'biographies.choderlosDeLaclos',
    'defoe' => 'biographies.defoe',
    'foscolo' => 'biographies.foscolo',
    'goethe' => 'biographies.goethe',
    
];

// Funzione per generare le rotte per le biografie
function createBiographyRoutes(array $biographies)
{
    foreach ($biographies as $name => $view) {
        Route::get("/biographies/$name", fn() => view($view))->name("biographies.$name");
    }
}

// Creazione delle rotte per le biografie
createBiographyRoutes($biographies);
