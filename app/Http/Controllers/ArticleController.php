<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show($id)
{
    $article = Article::find($id);

    return view('article.show', compact('article'));
}

}
