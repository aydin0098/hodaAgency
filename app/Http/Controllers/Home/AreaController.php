<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Bilboard\Price;
use App\Models\City;
use App\Models\Province;
use App\Models\Service;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $services = Service::find(3);
        $bilboards = $services->items()->get();
        return view('theme.area.index',compact('bilboards'));

    }

    public function province($id)
    {
        $service = Service::find($id);
        $provinces = Province::all();

        return view('theme.area.province',compact('service','provinces'));


    }

    public function cities($id,$province_id)
    {
        $service = Service::find($id);
        $province = Province::find($province_id);
        $cities = $province->cities()->get();


        return view('theme.area.cities',compact('service','province','cities'));

    }

    public function prices($id,$city_id)
    {
        $service = Service::find($id);
        $city = City::find($city_id);
        $province = $city->provinces()->get();
        $prices = Price::where('service_id',$service->id)
            ->where('city_id',$city->id)->get();
        return view('theme.area.prices',[
            'city' => $city,
            'province' => $province,
            'prices' => $prices,
            'service' => $service
        ]);

    }
}
