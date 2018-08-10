<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
USE App\Period;

class ProfessorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('professor.index')->with([
            'professors' => Professor::with(['courses' => function($query){
                $query->current();
            }])->get()
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

    public function edit($id)
    {
        return view('professor.edit')->with([
            'professor' => Professor::find($id)
        ]);
    }
    public function update(request $request, $id)
    {
        Professor::find($id)->update($request->all());
        return redirect()->back();
    }
    public function show($id)
    {
        return view('professor.show')->with([
            'professor' => Professor::with(['courses' => function($query){
                $query->current();
            }])->find($id)
        ]);
    }

    public function destroy($id)
    {
        Professor::destroy($id);
    }

    public function courses($id)
    {
        return view('component.courses')->with([
            'courses' => Professor::find($id)->courses()->current()->get(),
            'show' => false
        ]);
    }

    public function history($id){
        $lastPeriods = Period::select('id')->where('id', '<', Period::max('id'))->limit(2)->get();
        return view('component.courses')->with([
            'courses' => Professor::find($id)->courses()->whereIn('period_id', $lastPeriods)->get(),
            'show' => false
        ]);
    }
    public function search(Request $request)
    {
        return view('professor.index')->with([
            'professors' => Professor::with(['courses' => function($query){
                $query->current();
            }])->where('name', 'LIKE', '%'.$request->query('name').'%')->get()
        ]);
    }
}
