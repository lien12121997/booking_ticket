<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vct;
use App\Ve;

class vctController extends Controller
{
    public function getList()
    {
        $vct = Vct::all();
        return view('vct.list',compact('vct'));
    }

}
