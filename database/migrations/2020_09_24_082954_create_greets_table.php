<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->comment('ユーザID');
            $table->string('name')->null()->comment('ユーザ名');
            $table->text('greet')>comment('本文');
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
        Schema::dropIfExists('greets');
    }
}
