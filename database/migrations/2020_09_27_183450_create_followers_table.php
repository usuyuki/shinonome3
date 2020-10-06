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
            $table->bigInteger('following_id')->comment('フォローしているユーザID');
            $table->bigInteger('followed_id')->comment('フォローされているユーザID');
            $table->timestamps();

            //uniue制約→重複防止
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
