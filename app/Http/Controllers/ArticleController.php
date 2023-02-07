<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view("article.index");
    }

    public function detail($id)
    {
        return view("article.detail");
    }
}
