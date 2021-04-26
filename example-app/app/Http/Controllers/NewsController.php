<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatusEnum;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::where('status', NewsStatusEnum::PUBLISHED)
            ->whereIn('category_id', $this->getVisibleCategoryId())
            ->with('CategoryForThisNews')->get();
        return view( 'news.index', ['newsList'=> $news]);
    }
    public function show(int $id)
    {
        $news = News::findOrFail($id);
        return view('news.show', ['news' => $news]);
    }

    /**
     * Получаем id отображаеммых категорий новостей
     * @return array
     */
    protected function getVisibleCategoryId(): array
    {
        $visibleId = [];
        $categories = Category::where('is_visible', true)->get();
        foreach($categories as $category) {
            $visibleId[] = $category->id;
        }
        return $visibleId;
    }
}

