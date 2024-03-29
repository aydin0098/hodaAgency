<?php

namespace App\Models\Metro;

use App\Models\Portfolio;
use App\Models\Tv\Network;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $connection = 'mysql_metro';
    protected $guarded = false;


    public function stations()
    {
        return $this->belongsTo(Station::class,'station_id');

    }



}
