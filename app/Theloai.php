<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
	protected $table ='the_loai';
    protected $fillable = [
        'name'
    ];
}
