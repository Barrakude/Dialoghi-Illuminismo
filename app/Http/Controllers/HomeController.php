<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Helpers\ViewHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $biographiesViews = ViewHelper::getBiographiesViews();
        return view('homeBiographies', compact('biographiesViews'));
    }
}        return view('homeBiographies', compact('biographiesViews'));
    
