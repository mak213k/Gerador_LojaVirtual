<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Section extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function(Blueprint $table){

            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->boolean('image_position_left')->default(0);
            $table->boolean('display')->default(0);
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
        Schema::dropIfExists('section');
    }
}
