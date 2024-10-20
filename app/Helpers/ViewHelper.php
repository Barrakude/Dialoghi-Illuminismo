<?php
// app/Helpers/ViewHelper.php

namespace App\Helpers;

class ViewHelper
{
    public static function getBiographiesViews()
    {
        $views = [];
        $files = glob(resource_path('views/biographies/*.blade.php'));

        foreach ($files as $file) {
            $views[] = basename($file, '.blade.php');
        }

        return $views;
    }
}