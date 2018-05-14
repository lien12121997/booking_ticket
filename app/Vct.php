<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vct extends Model
{
	protected $table ='vct';
    protected $fillable = [
        'id_ve', 'id_lichchieu', 'so_ghe'
    ];

    public function ve()
    {
    	return $this->belongsTo('App\Ve', 'id_ve', 'id');
    }

    public function lichchieu()
    {
    	return $this->belongsTo('App\Lichchieu', 'id_lichchieu', 'id');
    }

    
}
