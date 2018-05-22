<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vct;
use App\Ve;
use App\Pcct;
use App\Ghe;

class veController extends Controller
{
    public function getList()
    {
    	$vct = vct::all();
    	$ghe = ghe::all();
        $ve = Ve::all();
        return view('ve.list',compact('ve', 'vct', 'ghe'));
    }
}
