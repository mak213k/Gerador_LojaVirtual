<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       // $this->call(AboutSeeder::class);
       DB::table('about')->insert([
           'title' => Str::random(20),
           'description' => Str::random(100),
           'address' => Str::random(100),
           'phone' => Str::random(9),
       ]);
       $this->call(PostSeeder::class);
    }
}
