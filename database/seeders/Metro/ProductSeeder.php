<?php

namespace Database\Seeders\Metro;

use App\Models\Metro\Line;
use App\Models\Metro\Product;
use App\Models\Metro\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'title' => 'پله برقی',
                'vahed' => 'متر مربع',
                'price' => '220000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/1.jpg',

            ],
            2 => [
                'id' => 2,
                'title' => 'بدنه قطار',
                'vahed' => 'متر مربع',
                'price' => '150000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/2.jpg',

            ],
            3 => [
                'id' => 3,
                'title' => 'راه پله',
                'vahed' => null,
                'price' => null,
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/3.jpg',

            ],
            4 => [
                'id' => 4,
                'title' => 'تابلو بنری',
                'vahed' => 'متر مربع',
                'price' => '165000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/4.jpg',

            ],
            5 => [
                'id' => 5,
                'title' => 'حریم ریلی',
                'vahed' => 'متر مربع',
                'price' => '170000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/5.jpg',

            ],
            6 => [
                'id' => 6,
                'title' => 'دستگیره',
                'vahed' => null,
                'price' => null,
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/6.jpg',

            ],

            7 => [
                'id' => 7,
                'title' => 'کتیبه',
                'vahed' => 'عدد',
                'price' => '100000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/7.jpg',

            ],
            8 => [
                'id' => 8,
                'title' => 'گیت',
                'vahed' => 'عدد',
                'price' => '220000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/8.jpg',

            ],
            9 => [
                'id' => 9,
                'title' => 'لایت باکس',
                'vahed' => 'عدد',
                'price' => '560000',
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/9.jpg',

            ],
            10 => [
                'id' => 10,
                'title' => 'ماکت',
                'vahed' => null,
                'price' => null,
                'image' => 'https://landing.hodaagency.ir/assets/img/metro/10.jpg',

            ],
        ];
        foreach ($lines as $cat) {
            $check = Product::where('title', $cat['title'])->first();
            if (!$check) {
                Product::create([
                    'title' => $cat['title'],
                    'image' => $cat['image'],
                    'vahed' => $cat['vahed'],
                    'price' => $cat['price'],
                ]);


            }
        }

    }
}
