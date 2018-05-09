<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cachieu extends Model
{
	protected $table ='ca_chieu';
    protected $fillable = [
        'name','start','end'
    ];
}
