<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'image_position_left' => false,
            'image' => Str::random(40),
            'display' => false,
            'publish_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
