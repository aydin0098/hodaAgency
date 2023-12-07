<?php

namespace Database\Seeders\Metro;

use App\Models\Metro\Grid;
use App\Models\Metro\Line;
use App\Models\Metro\Product;
use App\Models\Metro\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = [
            1 => [
                'id' => 1,
                'title' => 'A+',

            ],
            2 => [
                'id' => 2,
                'title' => 'A',

            ],
            3 => [
                'id' => 3,
                'title' => 'B',

            ],
        ];
        foreach ($lines as $cat) {
            $check = Grid::where('title', $cat['title'])->first();
            if (!$check) {
                Grid::create([
                    'title' => $cat['title'],
                ]);


            }
        }

    }
}
