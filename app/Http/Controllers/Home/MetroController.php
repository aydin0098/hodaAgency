<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Metro\Line;
use App\Models\Metro\Price;
use App\Models\Metro\Station;

class MetroController extends Controller
{
    public function lines()
    {
        $lines = Line::all();
        return view('theme.metro.lines',compact('lines'));

    }

    public function stations($id)
    {

        $line = Line::find($id);
        $stations = $line->stations()->get();
        return view('theme.metro.stations',compact('stations','line'));
    }


}
