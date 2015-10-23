<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// Su dung thanh phan Model Article trong Controller, phai add Model vao
use App\Article;

use Input;

use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{
    public function index()
    {
    	// Tao bien de lay du lieu
    	//$articles = Article::All(); Ham nay lay toan bo du lieu va show len
        //
        // Tuy nhien nen viet nhu ben duoi de thuc hien phan trang
        
        $articles = Article::paginate(4);

    	return view('articles.index',compact('articles')); // Trong Controller sau khi xu ly lay du lieu tu Model
    	 					 					 // sau do tra ve cho 1 view ten index de hien ra
    }
    
    public function show($id)
    {
    	$article = Article::find($id);    	
    	return view('articles.show')->with('article', $article);

    	// Co the viet cach khac de truyen parameter vao view nhu duoi day
    	// return view('article', compact('article'));
    	// return view('article')->with('article', $article);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
        // In du lieu test ra man hinh xem thu de debug
        //dd(Input::get('title'));
        
        //$title = Input::get('title');
        //$content = Input::get('content');
        $title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title' => $title,
            'content' => $content
        ]);

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        // Khai bao bien article nhan vao gia tri kieu model
        $article = Article::find($id);
        // Tra ve 1 View ten edit
        return view('articles.edit',compact('article'));
    }

    public function update($id, ArticleFormRequest $request)
    {
        //dd($id);
        $article = Article::find($id);

        $article->update([
            'title' => $request->get('title'), // Ham get hay ham input deu duoc
            'content' => $request->get('content')
        ]);

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('article.index');
    }
}
