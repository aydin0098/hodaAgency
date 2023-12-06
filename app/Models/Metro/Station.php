<?php

namespace App\Models\Metro;

use App\Models\Portfolio;
use App\Models\Tv\Network;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $table = 'stations';
    protected $connection = 'mysql_metro';
    protected $guarded = false;


    public function lines()
    {
        return $this->belongsTo(Line::class,'line_id');

    }

    public function products()
    {
        return $this->belongsTo(Price::class,'product_id');

    }



}
