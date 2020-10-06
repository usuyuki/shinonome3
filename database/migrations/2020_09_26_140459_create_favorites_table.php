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
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->unsignedInteger('greet_id')->comment('あいさつID');
            $table->timestamps();

            //unique制約→対象のカラムには重複した値を設定することができなくなる
            $table->unique([
                'user_id',
                'greet_id'
            ]);
            //他テーブルと接続 referenceはそのまま参照と捉えてよい？
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
