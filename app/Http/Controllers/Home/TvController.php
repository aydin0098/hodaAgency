<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Tv\Category;
use App\Models\Tv\Network;
use App\Models\Tv\Price;
use Illuminate\Http\Request;

class TvController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $networks = Network::all();
        return view('theme.tv.index',compact('categories','networks'));

    }

    public function networks($id)
    {
        $category = Category::find($id);
        $networks = Network::where('category_id',$category->id)->get();

        return view('theme.tv.network',compact('networks','category'));

    }

    public function prices($id,$net_id)
    {
        $category = Category::find($id);
        $network = Network::where('id',$net_id)->first();
        $prices = Price::where('net_id',$net_id)
            ->where('category_id',$id)->get();

        return view('theme.tv.prices',compact('category','prices','network'));

    }
}
