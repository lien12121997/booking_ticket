<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcct extends Model
{
	protected $table ='pcct';
    protected $fillable = [
        'id_ghe', 'id_phongchieu'
    ];
}
