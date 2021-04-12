<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new News())->getNews();
        return view( 'news.index', ['newsList'=> $news]);
    }
    public function show(int $id)
    {
        $news =(new News())->getNewsById($id);
        return view('news.show', ['news' => $news]);
    }
}
