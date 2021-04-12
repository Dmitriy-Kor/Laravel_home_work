<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = (new Category())->getCategories();
        return view( 'category.index', ['categoryList'=> $categories]);
    }
    public function show(int $id)
    {
        return view( 'category.show', ['categoryList'=> $this->categoryList, 'id' => $id]);
    }
}
