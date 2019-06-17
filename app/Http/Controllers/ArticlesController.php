<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
//        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index() {
        //$articles = Article::all();
		// $articles = Article::orderBy('published_at', 'desc')->get();  これでもOKです
        //$articles = Article::latest('published_at')->get(); 
		$articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }
 
    public function show($id) {
        $article = Article::findOrFail($id);
//eval(\Psy\sh());
 
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

//    public function store() {
//        $inputs = \Request::all();
//        Article::create($inputs);
// 
//        return redirect('articles');
//    }

//    public function store(Request $request) {
//        $rules = [
//            'title' => 'required|min:3',
//            'body' => 'required',
//            'published_at' => 'required|date',
//        ];
//        $this->validate($request, $rules);
// 
//        Article::create($request->all());
// 
//        return redirect('articles');
//    }

    public function store(ArticleRequest $request) {
        Article::create($request->all());
		\Session::flash('flash_message', '記事を作成しました。');

        //return redirect('articles');
		return redirect()->route('articles.index');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
 
        return view('articles.edit', compact('article'));
    }
 
    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id);
		\Session::flash('flash_message', '記事を更新しました。');
 
        $article->update($request->all());
 
        //return redirect(url('articles', [$article->id]));
		return redirect()->route('articles.show', [$article->id]);
    }

	public function destroy($id) {
        $article = Article::findOrFail($id);
 
        $article->delete();
		\Session::flash('flash_message', '記事を削除しました。');
 
        //return redirect('articles');
		return redirect()->route('articles.index');
    }


}
