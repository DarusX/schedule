<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use Gate;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('language.index')->with([
            'languages' => Language::all()
        ]);
    }

    public function create()
    {
        if(Gate::allows('language.create')){
            return view('language.create');
        }
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
            'language' => Language::with(['courses' => function($query){
                $query->current();
            }])->find($id)
        ]);
    }

    public function courses($id)
    {
        return view('component.courses')->with([
            'courses' => Language::find($id)->courses()->current()->get(),
            'show' => false
        ]);
        
    }
}
