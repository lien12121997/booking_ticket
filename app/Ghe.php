<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
	protected $table ='ghe';
    protected $fillable = [
        'name', 'price'
    ];
}
