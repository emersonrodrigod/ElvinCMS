<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideItemsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            $table->string('image');
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->foreign('slide_id')
                  ->references('id')
                  ->on('slides')
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
        Schema::dropIfExists('slide_items');
    }
}
