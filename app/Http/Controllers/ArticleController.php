<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use \Illuminate\Support\Facades\Validator;
use \App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
   
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
       Article::create($request->all());

       return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente']);
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
