<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function index()
    {
        return view('period.index')->with([
            'periods' => Period::all()
        ]);
    }

    public function create()
    {
        return view('period.create');
    }

    public function store(Request $request)
    {
        Period::create($request->all());
        return redirect()->back();
    }
    public function show($id)
    {
        return view('period.show')->with([
            'period' => Period::find($id)
        ]);
    }
    public function edit($id)
    {
        return view('period.edit')->with([
            'period' => Period::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Period::find($id)->update($request->all());
        return redirect()->back();
    }
}
