<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        return view('classroom.index')->with([
            'classrooms' => Classroom::all()
        ]);
    }

    public function show($id)
    {
        return view('classroom.show')->with([
            'classroom' => Classroom::with(['courses' => function($query){
                $query->current();
            }])->find($id)
        ]);
    }
    public function courses($id)
    {
        return view('component.courses')->with([
            'courses' => Classroom::find($id)->courses()->current()->get(),
            'show' => false
        ]);
        
    }
}
