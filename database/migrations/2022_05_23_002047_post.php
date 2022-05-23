<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table){

            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('author')->nullable();
            $table->integer('version');
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
        Schema::droIfExists('post');
    }
}
