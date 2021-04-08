<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2'],
            'name' => ['required', 'string', 'min:2'],
            'phone' => ['required', 'string', 'min:3'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        $dataFields = $request->only('name','name','phone','message');
        //dump($dataFields);
        return view('contact.success');

    }
}
