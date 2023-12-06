<?php

namespace App\Models\Tv;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;
    protected $table = 'networks';
    protected $connection = 'mysql_tv';
    protected $guarded = false;


}
