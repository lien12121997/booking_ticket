<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pcct;
use App\Ghe;
use App\Phongchieu;

class pcctController extends Controller
{
    public function getList()
    {
        $pcct = Pcct::all();
        return view('pcct.list',compact('pcct'));
    }

    public function getInsert()
    {
    	$ghe = Ghe::all();
    	$phongchieu = Phongchieu::all();
        return view('pcct.insert', compact('ghe','phongchieu'));
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'ghe' => 'required',
                'id_phongchieu' => 'required',
            ],
            [
                'ghe.required' => 'Ghế không được để trống',
                'id_phongchieu.required' => 'Phòng chiếu không được để trống',
            ]);
    	$pcct = new Pcct();
    	$pcct -> id_ghe = $req -> id_ghe;
    	$pcct -> id_phongchieu = $req -> id_phongchieu;
    	$pcct -> save();
    	return redirect('pcct/list');

    }

    public function getUpdate($id)
    {
        $pcct = Pcct::find($id);
        $ghe = Ghe::all();
    	$phongchieu = Phongchieu::all();
        return view('pcct.update',compact('pcct','ghe','phongchieu'));
    }


    public function postUpdate(Request $request, $id)
    {
        $pcct  = Pcct::find($id);
        $pcct -> id_ghe = $request -> id_ghe;
    	$pcct -> id_phongchieu = $request -> id_phongchieu;
        $pcct -> save();
        return redirect('pcct/list');
    }
    
    public function getDelete($id)
    {
        $pcct = Pcct::find($id);
        $pcct -> delete();
        return redirect('pcct/list');
    }
}
