<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            /**
             * 自分がフォローしているユーザーのあいさつを表示するとき
             * 自分がfollowing_id フォローした相手がfollowed_id
             */
            $table->unsignedInteger('following_id')->comment('フォローしているユーザID');
            $table->unsignedInteger('followed_id')->comment('フォローされているユーザID');
            $table->timestamps();

            //インデックスで高速化
            $table->index('following_id');
            $table->index('followed_id');
            //同じIDの登録防止
            $table->unique([
                'following_id',
                'followed_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
