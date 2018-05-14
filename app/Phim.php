<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
	protected $table ='phim';
    protected $fillable = [
        'name', 'img', 'date_khoichieu', 'date_ketthuc', 'tinh_trang', 'do_dai', 'id_theloai', 'id_luatuoi'
    ];

    public function theloai()
    {
    	return $this->belongsTo('App\Theloai', 'id_theloai', 'id');
    }

    public function luatuoi()
    {
    	return $this->belongsTo('App\Luatuoi', 'id_luatuoi', 'id');
    }

    public function lichchieu()
    {
    	return $this->hasMany('App\Lichchieu', 'id_phim', 'id');
    }
}
