<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
//        foreach ($this->categoryList as $category) {
//            echo "<h3>$category</h3>";
//        }
        return view( 'category', ['categoryList'=> $this->categoryList]);
    }
    public function show(int $id)
    {
        return "<h3>Показать категорию номер {$id}</h3>";
    }
}
