<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use \Illuminate\Support\Facades\Validator;

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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
        ]);

        if($validator->fails()) {

            return redirect()->back()->withErrors($validator);
        }

       Article::create($request->all());
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
