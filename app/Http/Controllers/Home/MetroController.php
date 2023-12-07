<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Metro\Line;
use App\Models\Metro\Price;
use App\Models\Metro\Product;
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

    public function products($id)
    {
        $products = Product::all();
        $station = Station::find($id);
        return view('theme.metro.products',compact('products','station'));

    }

    public function price($st_id,$id)
    {
        $product = Product::find($id);
        $station = Station::find($st_id);
//        $price = Price::where('station_id',$station->id)->get();

        return response()->json([
            'product' => $product,
//            'station' => $station,
//            'price' => $price
        ]);



    }


}
