<?php
// HomeController.php

namespace App\Http\Controllers;

use App\Helpers\ViewHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ottieni tutte le viste dalla cartella biographies
        $biographiesViews = ViewHelper::getBiographiesViews();

        // Passa le viste alla vista homeBiographies
        return view('homeBiographies', compact('biographiesViews'));
    }
}