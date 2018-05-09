<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatluong extends Model
{
	protected $table ='chat_luong';
    protected $fillable = [
        'name'
    ];
}
