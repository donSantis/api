<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger('career_id')->unsigned()->nullable();
            $table->string('nickname');
            $table->string('lastname');
            $table->string('password');
            $table->string('email');
            $table->string('phone');
            $table->string('section');
            $table->integer('role');
            $table->string('phrase');
            $table->string('interest');
            $table->string('description');
            $table->string('info1');
            $table->string('info2');
            $table->string('info3');
            $table->string('image');
            $table->timestamps();
            $table->foreign('career_id')->references('id')->on('careers');
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
};
