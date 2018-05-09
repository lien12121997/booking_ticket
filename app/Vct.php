<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vct extends Model
{
	protected $table ='vct';
    protected $fillable = [
        'id_ve', 'so_ghe'
    ];
}
