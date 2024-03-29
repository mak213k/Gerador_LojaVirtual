<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'author' => Str::random(100),
            'version' => rand(2,15),
        ]);
    }
}
