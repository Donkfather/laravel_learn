<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use Auth;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only'=>'create']);
    }
    /**
    * Returns latest published articles.
    * 
    *
    * @param
    * @return Response
    */
        
    public function index()    {


    	$articles = Article::latest('created_at')->published()->get();

    	return view('articles.index',compact('articles'));
    }

    /**
    * Returns the view of the specified article.
    *
    *
    * @param article (id)
    * @return Response
    */
        
    public function show(Article $article)
    {
    	return view('articles.show',compact('article'));
    }

    /**
    * Returns the create article view.
    *
    *
    * @param
    * @return Response
    */
        

    public function create()
    {
        return view('articles.create');
    }

    /**
    * The store new article method.
    *
    *
    * @param request
    * @return Response redirect
    */
        
    public function store(Requests\ArticleRequest $request)
    {
        //dd($request);
        $article = new Article($request->all());

        $request->user()->articles()->save($article);

        \Session::flash('flash_message','Your article has been created!');


        return redirect('articles');
    }

    /**
    * The edit view for an article.
    *
    *
    * @param article
    * @return Response
    */
        

    public function edit(Article $article)
    {


        return view('articles.edit',compact('article'));
    }

    /**
    * The update an article, method.
    *
    *
    * @param article, request
    * @return Response
    */
        

    public function update(Article $article,Requests\ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
