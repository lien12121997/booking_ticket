<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
	protected $table ='phim';
    protected $fillable = [
        'name', 'img', 'date_khoichieu', 'date_ketthuc', 'tinh_trang', 'do_dai', 'id_theloai', 'id_luatuoi'
    ];
}
