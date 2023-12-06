<?php

namespace App\Models;

use App\Models\Bilboard\Price;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $guarded = false;

    public function prices()
    {
        return $this->hasMany(Price::class);

    }

    public function provinces()
    {
        return $this->belongsTo(Province::class,'province_id','id');

    }


}
