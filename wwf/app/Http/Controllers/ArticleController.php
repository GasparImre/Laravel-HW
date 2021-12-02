<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(25);
        return view("index", compact('articles'));
    }

    public function create()
    {
        return view('create-article');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                "title" => "required",
                "description" => "required",

                            ]

        );
        $article=new Article();
        $article->title = $request->input("title");
        $article->description = $request->input("description");
        $article->user_id = Auth::id();
        $article->save();

        if(!is_null($article))
            return back()->with("success", "Success! Article created");
        else
            return back()->with("failed", "Alert! Article not created");
    }

    public function show(Article $article)
    {
        return view('show-article', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('edit-article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);
        $article = $article->update($request->all());
        if(!is_null($article))
            return back()->with("success", "Success! Article updated");
        else
            return back()->with("failed", "Alert! Article not updated");
    }

    public function destroy(Article $article)
    {
        $article = $article->delete();
        if(!is_null($article))
            return back()->with("success", "Success! Article deleted");
        else
            return back()->with("failed", "Alert! Article not deleted");
    }

    public function manage(){
        if (auth()->user()->hasRole('admin')) {
            $articles = Article::latest()->paginate(25);
        } else {
//            $articles = Article::latest()->paginate(25);
            $articles = Article::where('user_id', Auth::id())->paginate(25);
            return view("manage_articles", compact('articles'));

        }

        return view("manage_articles", compact('articles'));

//        return view("manage_articles", compact('articles'));
    }
}
