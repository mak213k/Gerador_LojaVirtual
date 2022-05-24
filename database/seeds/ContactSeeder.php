<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'title' => Str::random(10),
            'description' => Str::random(40),
            'label_name' => Str::random(10),
            'label_email' => Str::random(10),
            'label_text' => Str::random(50),
            'label_btn_send' => Str::random(10),
            'label_btn_clean' => Str::random(10),
            'name_corp' => Str::random(100),
            'address_corp' => Str::random(100),
            'city_country_corp' => Str::random(100),
            'phone_corp' => Str::random(9),
            
        ]);
    }
}
