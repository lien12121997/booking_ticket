<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lichchieu;
use App\Phim;
use App\Chatluong;
use App\Phongchieu;
use App\Cachieu;
use App\Pcct;

class lichchieuController extends Controller
{
    public function getList()
    {
        $chatluong = Chatluong::all();
        $lichchieu = Lichchieu::all();
        $phongchieu = Phongchieu::all();
        $pcct = Pcct::all();
        $cachieu = Cachieu::all();
        return view('lichchieu.list',compact('lichchieu', 'chatluong', 'phongchieu', 'cachieu', 'pcct'));
    }

    public function getInsert()
    {
    	$phim = Phim::all();
    	$chatluong = Chatluong::all();
    	$phongchieu = Phongchieu::all();
    	$cachieu = Cachieu::all();
        return view('lichchieu.insert', compact('phim','chatluong','phongchieu','cachieu'));
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'id_phim' => 'required',
                'id_chatluong' => 'required',
                'id_phongchieu' => 'required',
                'id_cachieu' => 'required',
            ],
            [
                'id_phim.required' => 'Phim không được để trống',
                'id_chatluong.required' => 'Chất lượng không được để trống',
                'id_phongchieu.required' => 'Phòng chiếu không được để trống',
                'id_cachieu.required' => 'Ca chiếu không được để trống',
            ]);
    	$lichchieu = new Lichchieu();
    	$lichchieu -> id_phim = $req -> id_phim;
    	$lichchieu -> id_chatluong = $req -> id_chatluong;
    	$lichchieu -> id_phongchieu = $req -> id_phongchieu;
    	$lichchieu -> id_cachieu = $req -> id_cachieu;
    	$lichchieu -> save();
    	return redirect('lichchieu/list');

    }

    public function getUpdate($id)
    {
        $lichchieu = Lichchieu::find($id);
    	$phim = Phim::all();
    	$chatluong = Chatluong::all();
    	$phongchieu = Phongchieu::all();
    	$cachieu = Cachieu::all();
        return view('lichchieu.update',compact('lichchieu','phim','chatluong','phongchieu','cachieu'));
    }


    public function postUpdate(Request $request, $id)
    {
        $lichchieu  = Lichchieu::find($id);
        $lichchieu -> id_phim = $request -> id_phim;
    	$lichchieu -> id_chatluong = $request -> id_chatluong;
    	$lichchieu -> id_phongchieu = $request -> id_phongchieu;
    	$lichchieu -> id_cachieu = $request -> id_cachieu;
        $lichchieu -> save();
        return redirect('lichchieu/list');
    }
    
    public function getDelete($id)
    {
        $lichchieu = Lichchieu::find($id);
        $lichchieu -> delete();
        return redirect('lichchieu/list');
    }
}
