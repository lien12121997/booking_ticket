<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VCT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vct', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_ve');
            $table->unsignedInteger('id_lichchieu');
            $table->unsignedInteger('so_ghe');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('vct', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_ve')->references('id')->on('ve');
            $table->foreign('id_lichchieu')->references('id')->on('lich_chieu');
            $table->foreign('so_ghe')->references('id')->on('pcct');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vct');
    }
}
