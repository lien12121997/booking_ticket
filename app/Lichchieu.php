<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lichchieu extends Model
{
	protected $table ='lich_chieu';
    protected $fillable = [
        'id_phim', 'id_chatluong', 'id_phongchieu', 'id_cachieu'
    ];

    public function chatluong()
    {
    	return $this->belongsTo('App\Chatluong', 'id_chatluong', 'id');
    }

    public function phongchieu()
    {
    	return $this->belongsTo('App\Phongchieu', 'id_phongchieu', 'id');
    }

    public function phim()
    {
    	return $this->belongsTo('App\Phim', 'id_phim', 'id');
    }

    public function cachieu()
    {
    	return $this->belongsTo('App\Cachieu', 'id_cachieu', 'id');
    }
}
