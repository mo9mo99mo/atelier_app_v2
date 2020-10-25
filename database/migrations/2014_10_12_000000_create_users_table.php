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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('users_profile_txt')->nullable(); //追加
            $table->string('users_icon_path')->nullable(); //追加
            $table->string('users_website_url')->nullable(); //追加
            $table->string('users_instagram_url')->nullable(); //追加
            $table->string('users_facebook_url')->nullable(); //追加
            $table->string('users_twitter_url')->nullable(); //追加
            $table->string('users_youtube_url')->nullable(); //追加
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
