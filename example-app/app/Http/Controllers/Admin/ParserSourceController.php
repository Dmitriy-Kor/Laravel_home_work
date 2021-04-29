<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateParserSource;
use Illuminate\Http\Request;
use App\Models\ParserSource;

class ParserSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = ParserSource::select(['id', 'description', 'is_visible', 'url'])->paginate(10);
        return view('admin.parser_source.index', ['resources' => $resources, 'count' => ParserSource::count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parser_source.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateParserSource $request)
    {
        $data = $request->only('url', 'description', 'is_visible');
        if (!isset($data['is_visible'])) {
            $data['is_visible'] = 0;
        }
        $parserSource = ParserSource::create($data);

        if ($parserSource) {
            return redirect()->route('admin.resources.index')->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'не удалось добавить запись');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
