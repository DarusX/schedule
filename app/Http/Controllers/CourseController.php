<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MaxHours;
use App\Classroom;
use App\Hour;
use App\Language;
use App\Professor;
use App\Course;
use App\Period;
use Gate;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('course.index')->with([
            'courses' => Course::current()->get()
        ]);
    }
    public function create()
    {
        return view('course.create')->with([
            'classrooms' => Classroom::all(),
            'hours' => Hour::all(),
            'languages' => Language::all(),
            'professors' => Professor::all(),
            'periods' => Period::orderBy('id', 'DESC')->get()
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'professor_id' => 'maxHours'
        ]);
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

    public function destroy($id)
    {
        $this->authorize('course.delete', $id);
        Course::destroy($id);
    }
}
