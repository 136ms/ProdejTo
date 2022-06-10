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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('itemName');
            $table->string('location');
            $table->integer('price');
            $table->string('description');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('categoryID')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
};
