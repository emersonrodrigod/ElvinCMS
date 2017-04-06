<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('lang')->default('en');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('slug')->index()->nullable();
            $table->string('summary')->nullable();
            $table->text('text');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->integer('slide_id')->nullable()->unsigned();
            $table->timestamp('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_erasable')->default(true);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('posts');
    }
}
