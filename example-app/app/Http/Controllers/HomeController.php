<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //dd(app());
        return view( 'home', ['categoryList'=> $this->categoryList, 'newsList'=> $this->newsList]);
    }
}
