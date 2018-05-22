<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Infomation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infomation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address');
            $table->string('support');
            $table->string('phone');
            $table->string('hotline')->nullable();
            $table->string('slogan')->nullable();
            $table->string('image')->nullable();
            $table->string('website')->nullable();
            $table->string('fanpage')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infomation');
    }
}
