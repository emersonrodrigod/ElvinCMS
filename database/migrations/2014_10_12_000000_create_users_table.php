<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->default(4);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
