<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('classroom.index')->with([
            'classrooms' => Classroom::all()
        ]);
    }

    public function create()
    {
        return view('classroom.create');
    }

    public function show($id)
    {
        return view('classroom.show')->with([
            'classroom' => Classroom::with(['courses' => function($query){
                $query->current();
            }])->find($id)
        ]);
    }
    public function edit($id)
    {
        return view('classroom.edit')->with([
            'classroom' => Classroom::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        Classroom::find($id)->update($request->all());
        return redirect()->back();
    }
    public function courses($id)
    {
        return view('component.courses')->with([
            'courses' => Classroom::find($id)->courses()->current()->get(),
            'show' => false
        ]);
        
    }
}
