<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content')->nullable();
            $table->string('img')->nullable();
            $table->string('author')->nullable();
            $table->unsignedInteger('id_loaitin');
            $table->date('date');
            $table->rememberToken(); 
            $table->timestamps();  
        });

        Schema::table('tin_tuc', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_loaitin')->references('id')->on('loai_tin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tin_tuc');
    }
}
