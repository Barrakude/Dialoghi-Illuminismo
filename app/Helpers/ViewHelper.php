<?php
// app/Helpers/ViewHelper.php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class ViewHelper
{
    public static function getBiographiesViews()
    {
        $viewsPath = resource_path('views/biographies/');
        $files = File::files($viewsPath);

        return array_map(function ($file) {
            return str_replace('.blade', '', pathinfo($file, PATHINFO_FILENAME));
        }, $files);
    }
}
