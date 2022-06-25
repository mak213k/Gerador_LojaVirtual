<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer')->insert([
            'brand' => Str::random(10),
            'description' => Str::random(20),
            'author' => Str::random(10),
            'logo' => Str::random(10),
            'active' => false,
            'publish_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
