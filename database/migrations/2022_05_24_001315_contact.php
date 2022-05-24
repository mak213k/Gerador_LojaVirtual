<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function(Blueprint $table){

            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('label_name')->nullable();
            $table->string('label_email')->nullable();
            $table->string('label_text')->nullable();
            $table->string('label_btn_send')->nullable();
            $table->string('label_btn_clean')->nullable();
            $table->string('name_corp')->nullable();
            $table->string('address_corp')->nullable();
            $table->string('city_country_corp')->nullable();
            $table->string('phone_corp')->nullable();
            $table->timestamp('publish_at', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
