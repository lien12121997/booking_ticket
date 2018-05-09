<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lichchieu extends Model
{
	protected $table ='lich_chieu';
    protected $fillable = [
        'id_phim', 'id_chatluong', 'id_phongchieu', 'id_cachieu'
    ];
}
