<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model
{
	protected $table ='loai_tin';
    protected $fillable = [
        'name'
    ];
}
