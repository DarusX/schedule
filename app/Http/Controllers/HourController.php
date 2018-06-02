<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hour;
use App\Period;

class HourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('hour.index')->with([
            'hours' => Hour::all()
        ]);
    }

    public function show($id)
    {
        return view('hour.show')->with([
            'hour' => Hour::with(['courses' => function($query){
                $query->current();
            }])->find($id)
        ]);
    }

    public function destroy()
    {
        Hour::destroy($id);
    }

    public function courses($id)
    {
        return view('component.courses')->with([
            'courses' => Hour::find($id)->courses()->current()->get(),
            'show' => false
        ]);
        
    }
}
