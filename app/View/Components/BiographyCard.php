<?php
// app/View/Components/BiographyCard.php

namespace App\View\Components;

use Illuminate\View\Component;

class BiographyCard extends Component
{
    public $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function render()
    {
        return view('components.biography-card');
    }
}
