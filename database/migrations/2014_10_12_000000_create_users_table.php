<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->text('description')->nullable();
            $table->integer('followers')->nullable();
            $table->integer('following')->nullable();
            $table->text('profile_pic_path')->nullable();
            $table->integer('no_of_blogs')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
