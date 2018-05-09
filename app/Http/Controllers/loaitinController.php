<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaitin;

class loaitinController extends Controller
{
    public function getList()
    {
        $loaitin = Loaitin::all();
        return view('loaitin.list',compact('loaitin'));
    }

    public function getInsert()
    {
        return view('loaitin.insert');
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
    	$loaitin = new Loaitin();
    	$loaitin -> name = $req -> name;
    	$loaitin -> save();
    	return redirect('loaitin/list');

    }

    public function getUpdate($id)
    {
        $loaitin = Loaitin::find($id);
        return view('loaitin.update',compact('loaitin'));
    }


    public function postUpdate(Request $request, $id)
    {
        $loaitin  = Loaitin::find($id);
        $loaitin -> name = $request -> name;
        $loaitin -> save();
        return redirect('loaitin/list');
    }
    
    public function getDelete($id)
    {
        $loaitin = Loaitin::find($id);
        $loaitin -> delete();
        return redirect('loaitin/list');
    }
}
