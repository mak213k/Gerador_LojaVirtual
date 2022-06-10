<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Midia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midia', function(Blueprint $table){

            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('name');
            $table->string('image');
            $table->timestamp('publish_at');
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
        Schema::dropIfExists('midia');
    }
}
