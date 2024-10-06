<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show($id)
{
    $article = Article::find($id);

    $preview = Str::limit($article->content, 300); // Limita a 300 caratteri
    return view('article.show', compact('article'));
}

}
