<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $imService = Service::where('import',1)->take(4)->get();
        $categories = Category::all();
        $portfolios = Portfolio::all();
        return view('theme.index',compact('sliders','imService','categories','portfolios'));
    }
}
