<?php

namespace App\Models\Tv;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $connection = 'mysql_tv';
    protected $guarded = false;


}
