<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LichChieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_chieu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_phim');
            $table->unsignedInteger('id_chatluong');
            $table->unsignedInteger('id_phongchieu');
            $table->unsignedInteger('id_cachieu');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('lich_chieu', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_phim')->references('id')->on('phim');
            $table->foreign('id_chatluong')->references('id')->on('chat_luong');
            $table->foreign('id_phongchieu')->references('id')->on('phong_chieu');
            $table->foreign('id_cachieu')->references('id')->on('ca_chieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_chieu');
    }
}
