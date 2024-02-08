<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\ArticlePosted;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::orderby('id', 'desc')->paginate(5);
        return view('article.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'article_title' => 'required|min:5',
            'article_content' => 'required|min:15'
        ]);
        $article = new Article;
        $article->title = $request->article_title;
        $article->content = $request->article_content;
        $article->save();
        Mail::to($request->user())->send(new ArticlePosted($article));
        return redirect()->route('articles')->with('notification', 'Записът е създаден успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'article_title' => 'required|min:5',
            'article_content' => 'required|min:15',
        ]);
        $article = Article::findOrFail($id);
        $article->title = $request->article_title;
        $article->content = $request->article_content;
        $article->save();
        return redirect()->route('articles')->with('notification', 'Записът е обновен успешно!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $articles = Article::destroy($id);
        return redirect()->back()->with('notification', 'Записът е изтрит успешно!');
    }
}
