<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Metro\GridSeeder;
use Database\Seeders\Metro\LineSeeder;
use Database\Seeders\Metro\ProductSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LineSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GridSeeder::class);

    }
}
