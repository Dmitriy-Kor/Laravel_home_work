<?php

namespace App\Http\Controllers\Admin;

use App\Enums\NewsStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::select(['id', 'title', 'image', 'text', 'created_at','status'])->paginate(5);
        return view( 'admin.news.index', ['newsList'=> $news, 'count' => News::count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.news.create',  ['categoryList'=> Category::where('is_visible', true)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:2'],
            'description' => ['required', 'string', 'min:2'],
            ]);
        $dataFields = $request->only('title', 'text', 'category_id', 'slug', 'status');
        $news= News::create($dataFields);
        if($news) {
            return redirect()->route('admin.news.index')->with('success', 'Новость успешно добавлена');
        }
        return back()->with('error', 'не удалось добавить новость');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrfail($id);
        return view( 'admin.news.edit', ['news' => $news]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $dataFields = $request->only('title', 'text', 'category_id', 'slug', 'status');
        $news = $news->fill($dataFields)->save();
        if($news) {
            return redirect()->route('admin.news.index')->with('success', 'Новость успешно изменена');
        }
        return back()->with('error', 'не удалось изменить новость');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if($news) {
            $news->delete();
        }
        return redirect()->route('admin.news.index');
    }
}
