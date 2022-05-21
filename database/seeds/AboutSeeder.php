<?php


use Illuminate\Database\Seeder;
use Iluminate\Support\Facades\DB;
use Iluminate\Support\Facades\Str;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'address' => Str::random(100),
            'phone' => Str::random(9),
        ]);
    }
}
