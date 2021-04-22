<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrateCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $categories = Category::where('is_visible', true)->get();
        $categories = Category::select(['id','title','description','is_visible','created_at'])->paginate(5);
        return view( 'admin.category.index', ['categories'=> $categories, 'count' => Category::count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CrateCategory $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrateCategory $request)
    {
        $dataFields = $request->only('title','description','is_visible');
        $category = Category::create($dataFields);

        if($category) {
            return redirect()->route('admin.categories.index')->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'не удалось добавить запись');
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
    public function edit(Category $category)
    {
        //$category = Category::findOrFail($id); //ищем нужную категорию по id
        return view( 'admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, Category $category)
    {

        $dataFields = $request->only('title','description','is_visible');
        if(!isset($dataFields['is_visible'])) {
            $dataFields['is_visible'] = 0;

        }
        $category = $category->fill($dataFields)->save();
        if($category) {
            return redirect()->route('admin.categories.index')->with('success', 'Категория успешно изменена');
        }
        return back()->with('error', 'не удалось изменить категорию');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            if (request()->ajax()) {
                $category->delete();

                return response()->json(['success' => true]);
            }
        }catch(\Exception $e) {
            return response()->json(['success' => false]);
        }
    }

}
