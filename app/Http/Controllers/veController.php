<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vct;
use App\Ve;
use App\Pcct;

class veController extends Controller
{
    public function getList()
    {
        $ve = Ve::all();
        return view('ve.list',compact('ve'));
    }
}
