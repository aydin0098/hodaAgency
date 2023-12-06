<?php

namespace App\Models\Tv;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $connection = 'mysql_tv';
    protected $guarded = false;


    public function networks()
    {
        return $this->hasMany(Network::class);

    }


}
