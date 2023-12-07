<?php

namespace App\Models\Metro;

use App\Models\Portfolio;
use App\Models\Tv\Network;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    use HasFactory;
    protected $table = 'grids';
    protected $connection = 'mysql_metro';
    protected $guarded = false;



}
