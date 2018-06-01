<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hour;

class HourController extends Controller
{
    public function index()
    {
        return view('hour.index')->with([
            'hours' => Hour::all()
        ]);
    }

    public function show($id)
    {
        return view('hour.show')->with([
            'hour' => Hour::find($id)
        ]);
    }

    public function destroy()
    {
        Hour::destroy($id);
    }
}
