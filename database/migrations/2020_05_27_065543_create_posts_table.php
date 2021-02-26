<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('caption')->nullable();
            $table->string('privacy_status')->nullable();
            $table->boolean('isDeleted')->default(false);
            $table->boolean('isShared')->default(false);
            $table->integer('no_of_shares')->default(0);
            $table->integer('original_post_id')->unsigned()->nullable();
            $table->integer('original_poster_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('original_post_id')->references('id')->on('posts');
            $table->foreign('original_poster_id')->references('id')->on('users');
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
