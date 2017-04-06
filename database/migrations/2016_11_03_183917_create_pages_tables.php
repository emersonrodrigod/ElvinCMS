<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('lang')->default('en');
            $table->string('title');
            $table->string('slug')->index()->nullable();
            $table->text('summary')->nullable();
            $table->text('text');
            $table->string('item')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_erasable')->default(true);
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
        Schema::dropIfExists('pages');
    }
}
