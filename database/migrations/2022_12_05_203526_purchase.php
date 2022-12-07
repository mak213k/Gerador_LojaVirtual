<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Purchase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function(Blueprint $table){

            $table->increments('id');
            $table->enum('provider', ['Petz','PetLove','PetshopOnline', 'Amazon']);
            $table->dateTime('date_purchase');
            $table->double('cost_price_total',8,2);
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
        Schema::dropIfExists('purchase');
    }
}
