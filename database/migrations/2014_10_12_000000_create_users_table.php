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
            $table->bigIncrements('id');
            $table->string('name')->comment('twitterの名前から取得');
            $table->string('explain')->nullable()->comment('自己紹介');
            $table->string('twitter_id')->unique()->nullable()->comment('twitterの内部ID');
            $table->string('twitter_name')->nullable()->comment('twitterの@名前');
            $table->string('twitter_token')->nullable()->comment('twitterのトークン');
            $table->string('profile_photo_path')->nullable()->comment('twitterアイコンのURL');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->change();
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
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable(false)->change();
        });
    }
}
