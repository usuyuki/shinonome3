<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('send_user_id')->comment('送信者');
            $table->bigInteger('receive_user_id')->comment('受信者');
            $table->text('message')->comment('メッセージ');
            $table->timestamps();

            $table->index('id');
            $table->index('send_user_id');
            $table->index('receive_user_id');


            $table->foreign('send_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('receive_user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('direct_messages');
    }
}
