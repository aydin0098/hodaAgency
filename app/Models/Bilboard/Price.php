<?php

namespace App\Models\Bilboard;

use App\Models\City;
use App\Models\Province;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id','id');

    }
    public function provinces()
    {
        return $this->belongsTo(Province::class,'province_id','id');

    }

    public function cities()
    {
        return $this->belongsTo(City::class,'city_id','id');

    }
}
