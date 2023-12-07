<?php

namespace Database\Seeders\Metro;

use App\Models\Metro\Line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
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
                'title' => 'خط 1',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/1.jpg',

            ],
            2 => [
                'id' => 2,
                'title' => 'خط 2',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/2.jpg',

            ],
            3 => [
                'id' => 3,
                'title' => 'خط 3',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/3.jpg',

            ],
            4 => [
                'id' => 4,
                'title' => 'خط 4',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/4.jpg',

            ],
            5 => [
                'id' => 5,
                'title' => 'خط 5',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/5.jpg',

            ],
            6 => [
                'id' => 6,
                'title' => 'خط 6',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/6.jpg',

            ],
            7 => [
                'id' => 7,
                'title' => 'خط 7',
                'image' => 'https://hodaagency.ir/home/assets/img/services/metro/lines/7.jpg',

            ],
        ];
        foreach ($lines as $cat) {
            $check = Line::where('title', $cat['title'])->first();
            if (!$check) {
                Line::create([
                    'title' => $cat['title'],
                    'image' => $cat['image'],
                ]);


            }
        }

    }
}
