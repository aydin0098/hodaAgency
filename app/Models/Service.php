<?php

namespace App\Models;

use App\Models\Bilboard\Price;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = false;


    public function items()
    {
        return $this->hasMany(Service::class,'parent_id');

    }


}
