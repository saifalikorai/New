<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author')->nullable();
            $table->text('title')->nullable();
            $table->string('tagline')->nullable();
            $table->integer('category_id')->nullable();
            $table->longText('body')->nullable();
            $table->text('tags')->nullable();
            $table->text('headings')->nullable();
            $table->text('paragraphs')->nullable();
            $table->integer('likes')->nullable();
            $table->text('comments')->nullable();
            $table->text('share')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
