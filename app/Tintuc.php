<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
	protected $table ='tin_tuc';
    protected $fillable = [
        'title', 'id_loaitin', 'date'
    ];

    public function loaitin()
    {
    	return $this->belongsTo('App\Loaitin', 'id_loaitin', 'id');
    }
}
