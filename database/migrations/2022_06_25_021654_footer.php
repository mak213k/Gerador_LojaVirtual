<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Footer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function(Blueprint $table){

            $table->increments('id');
            $table->string('brand');
            $table->string('description');
            $table->string('author');
            $table->string('logo');
            $table->boolean('active')->default(0);
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
