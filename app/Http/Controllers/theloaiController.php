<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;

class theloaiController extends Controller
{
    public function getList()
    {
        $theloai = Theloai::all();
        return view('theloai.list',compact('theloai'));
    }

    public function getInsert()
    {
        return view('theloai.insert');
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
    	$theloai = new Theloai();
    	$theloai -> name = $req -> name;
    	$theloai -> save();
    	return redirect('theloai/list');

    }

    public function getUpdate($id)
    {
        $theloai = Theloai::find($id);
        return view('theloai.update',compact('theloai'));
    }


    public function postUpdate(Request $request, $id)
    {
        $theloai  = Theloai::find($id);
        $theloai -> name = $request -> name;
        $theloai -> save();
        return redirect('theloai/list');
    }
    
    public function getDelete($id)
    {
        $theloai = Theloai::find($id);
        $theloai -> delete();
        return redirect('theloai/list');
    }
}
