<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatusEnum;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_visible', true)->get();
        return view( 'category.index', ['categoryList'=> $categories]);
    }

    public function show(int $id)
    {
        return view( 'category.show', ['newsList'=> News::where('status', NewsStatusEnum::PUBLISHED)
            ->where('category_id', $id)
            ->with('CategoryForThisNews')->get(),
            'category' => Category::findOrfail($id)]);

    }
}
