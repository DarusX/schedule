<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    public function index()
    {
        return view('period.index')->with([
            'periods' => Period::all()
        ]);
    }

    public function show($id)
    {
        return view('period.show')->with([
            'period' => Period::find($id)
        ]);
    }
}
