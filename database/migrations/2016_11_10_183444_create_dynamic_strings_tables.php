<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicStringsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_strings', function (Blueprint $table) {
            $table->integer('id')->index();
            $table->string('lang')->default('en');
            $table->string('slug')->index()->unique();
            $table->string('index')->unique();
            $table->text('value');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_strings');
    }
}
