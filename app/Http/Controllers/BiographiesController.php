<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class BiographiesController extends Controller
{
    public function homeBiographies()
    {
        // Recupera tutti i file dalla cartella resources/views/biographies
        $viewFiles = File::files(resource_path('views/biographies'));
        
        // Mappa i file per ottenere i nomi delle viste senza estensione
        $viewNames = collect($viewFiles)->map(function ($file) {
            return pathinfo($file, PATHINFO_FILENAME);
        });

        // Passa i nomi delle viste alla vista homeBiographies
        return view('homeBiographies', compact('viewNames'));
    }

    public function show($viewName)
    {
        // Controlla se la vista esiste in 'biographies'
        if (View::exists('biographies.' . $viewName)) {
            return view('biographies.' . $viewName);
        }

        abort(404, 'View not found');
    }
}
