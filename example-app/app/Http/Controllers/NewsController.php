<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        //dd(app());
        return view( 'news', ['newsList'=> $this->newsList]);
    }
    public function show(int $id)
    {
        return "<h3>Подробней о новости с ID  {$id} </h3>";
    }
}
