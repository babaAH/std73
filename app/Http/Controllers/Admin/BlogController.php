<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;

class BlogController extends Controller
{
    public function add(Request $request)
    {
        //
    }

    public function getFrom(){
        return view('admin.add-article');
    }

    public function showArticles(){
        $articles = Articles::all();

        return view('admin.blog', ['articles' => $articles]);
    }

    public function getArticle(Request $req, $id)
    {
        // $article = Articles::findOrFail($id);

        dd($req);
    }

    public function editArticle(Request $req, $id)
    {
        $article = Articles::findOrFaile($id);

        dd($article);
    }
}
