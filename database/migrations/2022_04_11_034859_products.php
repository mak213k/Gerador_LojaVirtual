<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){

            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('price');
            $table->integer('measure');
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
        Schema::droIfExists('products');
    }
}
