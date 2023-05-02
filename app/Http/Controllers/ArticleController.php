<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use \Illuminate\Support\Facades\Validator;
use \App\Http\Requests\StoreArticleRequest;
use \Illuminate\Support\Str;
use App\Models\Category;

class ArticleController extends Controller
{
   
    public function index()
    {
        // $articles = Article::where('user_id', auth()->user()->id)->get();  1° metodo (sotto c'è il 2°metodo)
        $articles = auth()->user()->articles;

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {


        $article = new Article();

        $article->title = $request->title;
        $article->user_id = auth()->user()->id;
        // $article->category_id = $request->category_id;
        $article->body = $request->body;

        $article->save();

        $article->categories()->attach($request->categories);


        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = $request->file('image')->getClientOriginalName();

            $randomFileName = uniqid('image_') . '.' . $request->file('image')->extension();

            $seoFriendlyFileName = Str::slug($request->title) . '.' . $request->file('image')->extension();

           $imagePath = $request->file('image')->storeAs('public/images/' . $article->id, $seoFriendlyFileName);

           $article->image = $imagePath;

           $article->save();
        } 
        
       return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente']);
    }

    public function edit(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        $categories = Category::all();

        return view('articles.edit', compact('article', 'categories'));
    }
    public function update(Request $request, Article $article) 
    {
        $article->fill($request->all())->save();
        
        $article->categories->attach($request->categories);
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
