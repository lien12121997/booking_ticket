<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phongchieu extends Model
{
	protected $table ='phong_chieu';
    protected $fillable = [
        'name'
    ];
}
