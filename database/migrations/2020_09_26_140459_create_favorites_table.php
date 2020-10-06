<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->unsignedInteger('greet_id')->comment('あいさつID');
            $table->timestamps();


            //インデックスで高速化
            $table->index('id');
            $table->index('user_id');
            $table->index('greet_id');


            //unique制約→対象のカラムには重複した値を設定することができなくなる
            //同じIDの登録防止
            $table->unique([
                'user_id',
                'greet_id'
            ]);
            //他テーブルと接続 referenceはそのまま参照と捉えてよい？
            //cascade→親テーブルに対して更新を行うと子テーブルで同じ値を持つカラムの値も合わせて更新される
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('greet_id')
                ->references('id')
                ->on('greets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
