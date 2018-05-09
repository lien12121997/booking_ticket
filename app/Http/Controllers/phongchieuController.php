<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phongchieu;

class phongchieuController extends Controller
{
    public function getList()
    {
        $phongchieu = Phongchieu::all();
        return view('phongchieu.list',compact('phongchieu'));
    }

    public function getInsert()
    {
        return view('phongchieu.insert');
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'name' => 'required|min:2|max:255',
            ],
            [
                'name.required' => 'Tên phòng chiếu không được để trống',
                'name.min' => 'Tên phòng chiếu phải từ 2 ký tự đến 255 ký tự',
                'name.max' => 'Tên phòng chiếu phải từ 2 ký tự đến 255 ký tự',
            ]);
    	$phongchieu = new Phongchieu();
    	$phongchieu -> name = $req -> name;
    	$phongchieu -> desc = $req -> desc;
    	$phongchieu -> save();
    	return redirect('phongchieu/list');

    }

    public function getUpdate($id)
    {
        $phongchieu = Phongchieu::find($id);
        return view('phongchieu.update',compact('phongchieu'));
    }


    public function postUpdate(Request $request, $id)
    {
        $phongchieu  = Phongchieu::find($id);
        $phongchieu -> name = $request -> name;
    	$phongchieu -> desc = $request -> desc;
        $phongchieu -> save();
        return redirect('phongchieu/list');
    }
    
    public function getDelete($id)
    {
        $phongchieu = Phongchieu::find($id);
        $phongchieu -> delete();
        return redirect('phongchieu/list');
    }
}
