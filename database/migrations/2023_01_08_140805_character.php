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
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
             ->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('class');
            $table->foreign('class')
              ->references('id')->on('class')->onDelete('cascade');
              $table->unsignedBigInteger('skil_one');
            $table->foreign('skil_one')
              ->references('id')->on('skils')->onDelete('cascade');  
            $table->string('image');
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
        Schema::dropIfExists('character');
    }
};