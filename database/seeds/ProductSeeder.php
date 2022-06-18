<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'price' => rand(2,15),
            'measure' => rand(2,15),
        ]);
    }
}
