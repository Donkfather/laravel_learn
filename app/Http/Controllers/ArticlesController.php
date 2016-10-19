<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use Auth;




class ArticlesController extends Controller
{
    public function index()
    {


    	$articles = Article::latest('published_at')->published()->get();

    	return view('articles.index',compact('articles'));
    }


    public function show($id)
    {
    	$article = Article::findOrFail($id);

    	return view('articles.show',compact('article'));
    }


    public function create()
    {
        return view('articles.create');
    }


    public function store(Requests\ArticleRequest $request)
    {
        $article = new Article($request->all());
        $request->user()->articles()->save($article);


        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit',compact('article'));
    }

    public function update($id,Requests\ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
