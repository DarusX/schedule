<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with([
            'period' => Period::latest()->first(),
            'coursesCount' => Course::where('period_id', Period::max('id'))->count(),
            'languageCount' => Course::where('period_id', Period::max('id'))->groupBy('language_id')->count()
        ]);
    }
}
