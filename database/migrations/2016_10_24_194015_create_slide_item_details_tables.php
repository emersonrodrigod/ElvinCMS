<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideItemDetailsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_item_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_item_id')->unsigned();
            $table->string('lang')->default('en');
            $table->string('caption')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();

            $table->foreign('slide_item_id')
                  ->references('id')
                  ->on('slide_items')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_item_details');
    }
}
