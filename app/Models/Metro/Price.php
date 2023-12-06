<?php

namespace App\Models\Metro;

use App\Models\Portfolio;
use App\Models\Tv\Network;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $connection = 'mysql_metro';
    protected $guarded = false;



}
