<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luatuoi;

class luatuoiController extends Controller
{
    public function getList()
    {
        $luatuoi = Luatuoi::all();
        return view('luatuoi.list',compact('luatuoi'));
    }

    public function getInsert()
    {
        return view('luatuoi.insert');
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'name' => 'required|min:2|max:255',
            ],
            [
                'name.required' => 'Tiêu đề không được để trống',
                'name.min' => 'Tiều đề phải từ 2 ký tự đến 255 ký tự',
                'name.max' => 'Tiêu đề phải từ 2 ký tự đến 255 ký tự',
            ]);
    	$luatuoi = new Luatuoi();
    	$luatuoi -> name = $req -> name;
    	$luatuoi -> save();
    	return redirect('luatuoi/list');

    }

    public function getUpdate($id)
    {
        $luatuoi = Luatuoi::find($id);
        return view('luatuoi.update',compact('luatuoi'));
    }


    public function postUpdate(Request $request, $id)
    {
        $luatuoi  = Luatuoi::find($id);
        $luatuoi -> name = $request -> name;
        $luatuoi -> save();
        return redirect('luatuoi/list');
    }
    
    public function getDelete($id)
    {
        $luatuoi = Luatuoi::find($id);
        $luatuoi -> delete();
        return redirect('luatuoi/list');
    }
}
