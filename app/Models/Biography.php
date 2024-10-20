<?php
// Biography.php

namespace App\Models;

use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biography extends Model
{
    use HasFactory;

    // Definisci la relazione con il modello View
    public function views()
    {
        return $this->hasMany(View::class);
    }
}