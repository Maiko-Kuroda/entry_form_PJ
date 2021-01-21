<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperatures', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->unsignedInteger('user_id');
            // $table->unsignedInteger('questionary_id');
            $table->string('temperature');
            $table->timestamps();

            // 外部キー制約
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//外部キー
            // $table->foreign('questionary_id')->references('id')->on('questionaries')->onDelete('cascade');//外部キー
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temperatures');
    }
}
