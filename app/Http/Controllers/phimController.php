<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phim;
use App\Theloai;
use App\Luatuoi;

class phimController extends Controller
{
    public function getList()
    {
        $theloai = Theloai::all();
        $phim = Phim::all();
        return view('phim.list',compact('phim', 'theloai'));
    }

    public function getInsert()
    {
    	$theloai = Theloai::all();
    	$luatuoi = Luatuoi::all();
        return view('phim.insert', compact('theloai','luatuoi'));
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'name' => 'required|min:2|max:255',
                'img' => 'required',
                'date_khoichieu' => 'required',
                'date_ketthuc' => 'required',
                'tinh_trang' => 'required',
                'do_dai' => 'required',
                'id_theloai' => 'required',
                'id_luatuoi' => 'required',
            ],
            [
                'name.required' => 'Tên phim không được để trống',
                'name.min' => 'Tên phim phải từ 2 ký tự đến 255 ký tự',
                'name.max' => 'Tên phim phải từ 2 ký tự đến 255 ký tự',
                'img.required' => 'Ảnh không được để trống',
                'date_khoichieu.required' => 'Ngày khởi chiếu không được để trống',
                'date_ketthuc.required' => 'Ngày kết thúc không được để trống',
                'tinh_trang.required' => 'Tình trạng không được để trống',
                'do_dai.required' => 'Độ dài phim không được để trống',
                'id_theloai.required' => 'Thể loại phim không được để trống',
                'id_luatuoi.required' => 'Lứa tuổi không được để trống',
            ]);
    	$phim = new Phim();
    	$phim -> name = $req -> name;
        if($req -> hasFile('img')){
            $file = $req -> img;
            $file_name = $file -> getClientOriginalName();
            $phim -> img = $file_name;
            $file -> move('images', $file_name);
        }
    	$phim -> date_khoichieu = $req -> date_khoichieu;
    	$phim -> date_ketthuc = $req -> date_ketthuc;
    	$phim -> tinh_trang = $req -> tinh_trang;
    	$phim -> do_dai = $req -> do_dai;
    	$phim -> id_theloai = $req -> id_theloai;
    	$phim -> id_luatuoi = $req -> id_luatuoi;
    	$phim -> desc = $req -> desc;
    	$phim -> save();
    	return redirect('phim/list');

    }

    public function getUpdate($id)
    {
        $phim = Phim::find($id);
    	$theloai = Theloai::all();
    	$luatuoi = Luatuoi::all();
        return view('phim.update',compact('phim','theloai','luatuoi'));
    }


    public function postUpdate(Request $request, $id)
    {
        $phim  = phim::find($id);
        $phim -> name = $request -> name;
        if($request -> hasFile('img')){
            $file = $request -> img;
            $file_name = $file -> getClientOriginalName();
            $phim -> img = $file_name;
            $file -> move('images', $file_name);
        }
    	$phim -> date_khoichieu = $request -> date_khoichieu;
    	$phim -> date_ketthuc = $request -> date_ketthuc;
    	$phim -> tinh_trang = $request -> tinh_trang;
    	$phim -> do_dai = $request -> do_dai;
    	$phim -> id_theloai = $request -> id_theloai;
    	$phim -> id_luatuoi = $request -> id_luatuoi;
    	$phim -> desc = $request -> desc;
        $phim -> save();
        return redirect('phim/list');
    }
    
    public function getDelete($id)
    {
        $phim = phim::find($id);
        $phim -> delete();
        return redirect('phim/list');
    }
}
