<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Hour;
use App\Language;
use App\Professor;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.index')->with([
            'courses' => Course::all()
        ]);
    }
    public function create()
    {
        return view('course.create')->with([
            'classrooms' => Classroom::all(),
            'hours' => Hour::all(),
            'languages' => Language::all(),
            'professors' => Professor::all()
        ]);
    }
    public function store(Request $request)
    {
        Course::create($request->all());
        \Session::flash('success', '');
        return redirect()->back();
    }

    public function edit($id)
    {
        return view('course.edit')->with([
            'course' => Course::find($id),
            'classrooms' => Classroom::all(),
            'hours' => Hour::all(),
            'languages' => Language::all(),
            'professors' => Professor::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        Course::find($id)->update($request->all());
        \Session::flash('success', '');
        return redirect()->back();
    }
}