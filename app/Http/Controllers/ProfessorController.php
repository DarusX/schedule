<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        return view('professor.index')->with([
            'professors' => Professor::all()
        ]);
    }

    public function create()
    {
        return view('professor.create');
    }

    public function store(Request $request)
    {
        Professor::create($request->all());
        \Session::flash('success', '');
        return redirect()->back();
    }

    public function show($id)
    {
        return view('professor.show')->with([
            'professor' => Professor::find($id)
        ]);
    }

    public function destroy($id)
    {
        Professor::destroy($id);
    }
}
