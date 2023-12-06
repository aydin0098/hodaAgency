<?php

namespace App\Models\Metro;

use App\Models\Portfolio;
use App\Models\Tv\Network;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;
    protected $table = 'lines';
    protected $connection = 'mysql_metro';
    protected $guarded = false;

    public function stations()
    {
        return $this->hasMany(Station::class);

    }





}
