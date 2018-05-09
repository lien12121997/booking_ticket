<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Phim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->date('date_khoichieu');
            $table->date('date_ketthuc');
            $table->string('tinh_trang');
            $table->string('do_dai');
            $table->unsignedInteger('id_theloai');
            $table->unsignedInteger('id_luatuoi');
            $table->longText('desc')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('phim', function(Blueprint $table){
            //Foreign key
            $table->foreign('id_theloai')->references('id')->on('the_loai');
            $table->foreign('id_luatuoi')->references('id')->on('lua_tuoi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phim');
    }
}
