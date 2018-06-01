<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    public function index()
    {
        return view('language.index')->with([
            'languages' => Language::all()
        ]);
    }

    public function create()
    {
        return view('language.create');
    }

    public function store(Request $request)
    {
        Language::create($request->all());
        \Session::flash('success', '');
        return redirect()->back();
    }

    public function show($id)
    {
        return view('language.show')->with([
            'language' => Language::find($id)
        ]);
    }
}
