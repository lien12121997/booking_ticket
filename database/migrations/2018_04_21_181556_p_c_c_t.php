<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PCCT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcct', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_ghe');
            $table->unsignedInteger('id_phongchieu');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('pcct', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_ghe')->references('id')->on('ghe');
            $table->foreign('id_phongchieu')->references('id')->on('phong_chieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcct');
    }
}
