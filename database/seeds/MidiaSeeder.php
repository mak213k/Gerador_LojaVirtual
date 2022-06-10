<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MidiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('midia')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'name' => Str::random(100),
            'publish_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
