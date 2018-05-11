<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
	protected $table ='ve';
    protected $fillable = [
        'id_user', 'id_lichchieu', 'qty', 'price' , 'date'
    ];
}
