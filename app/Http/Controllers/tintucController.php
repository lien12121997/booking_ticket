<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tintuc;
use App\Loaitin;

class tintucController extends Controller
{
    public function getList()
    {
        $tintuc = Tintuc::all();
        return view('tintuc.list',compact('tintuc'));
    }

    public function getInsert()
    {
    	$loaitin = Loaitin::all();
        return view('tintuc.insert', compact('loaitin'));
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'title' => 'required|min:2|max:255',
                'id_loaitin' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề không được để trống',
                'title.min' => 'Tiêu đề phải từ 2 ký tự đến 255 ký tự',
                'title.max' => 'Tiêu đề phải từ 2 ký tự đến 255 ký tự',
                'id_loaitin.required' => 'Loại tin không được để trống',
            ]);
    	$tintuc = new Tintuc();
    	$tintuc -> title = $req -> title;
    	$tintuc -> content = $req -> content;
    	if($req -> hasFile('img')){
            $file = $req -> img;
            $file_name = $file -> getClientOriginalName();
            $tintuc -> img = $file_name;
            $file -> move('images', $file_name);
        }
    	$tintuc -> author = $req -> author;
    	$tintuc -> id_loaitin = $req -> id_loaitin;
    	$tintuc -> date = $req -> date;
    	$tintuc -> save();
    	return redirect('tintuc/list');

    }

    public function getUpdate($id)
    {
        $tintuc = Tintuc::find($id);
        $loaitin = Loaitin::all();
        return view('tintuc.update',compact('tintuc','loaitin'));
    }


    public function postUpdate(Request $request, $id)
    {
        $tintuc  = Tintuc::find($id);
        $tintuc -> title = $request -> title;
    	$tintuc -> content = $request -> content;
    	if($request -> hasFile('img')){
            $file = $request -> img;
            $file_name = $file -> getClientOriginalName();
            $tintuc -> img = $file_name;
            $file -> move('images', $file_name);
        }
    	$tintuc -> author = $request -> author;
    	$tintuc -> id_loaitin = $request -> id_loaitin;
    	$tintuc -> date = $request -> date;
        $tintuc -> save();
        return redirect('tintuc/list');
    }
    
    public function getDelete($id)
    {
        $tintuc = Tintuc::find($id);
        $tintuc -> delete();
        return redirect('tintuc/list');
    }
}
