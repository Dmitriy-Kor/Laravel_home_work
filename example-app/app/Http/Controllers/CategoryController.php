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
        return view( 'category.index', ['categoryList'=> $this->categoryList]);
    }
    public function show(int $id)
    {
        return view( 'category.show', ['categoryList'=> $this->categoryList, 'id' => $id]);
    }
}
