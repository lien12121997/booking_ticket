<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_lichchieu');
            $table->double('qty');
            $table->double('price');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('ve', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_lichchieu')->references('id')->on('lich_chieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ve');
    }
}
