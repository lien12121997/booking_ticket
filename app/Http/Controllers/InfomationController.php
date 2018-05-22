<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infomation;

class InfomationController extends Controller
{
    public function getList()
    {
        $infomation = Infomation::all();
        return view('infomation.list',compact('infomation'));
    }

    public function getInsert()
    {
        return view('infomation.insert');
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
    	$infomation = new Infomation();
    	$infomation -> name = $req -> name;
        $infomation -> address = $req -> address;
        $infomation -> support = $req -> support;
        $infomation -> phone = $req -> phone;
        $infomation -> hotline = $req -> hotline;
        $infomation -> slogan = $req -> slogan;
        if($req -> hasFile('file')){
            $file = $req -> file;
            $file_name = $file -> getClientOriginalName();
            $infomation -> image = $file_name;
            $file -> move('images', $file_name);
        }
        $infomation -> website = $req -> website;
        $infomation -> fanpage = $req -> fanpage;
    	$infomation -> save();
    	return redirect('infomation/list');

    }

    public function getUpdate($id)
    {
        $infomation = Infomation::find($id);
        return view('infomation.update',compact('infomation'));
    }


    public function postUpdate(Request $req, $id)
    {
        $infomation  = Infomation::find($id);
        $infomation -> name = $req -> name;
        $infomation -> address = $req -> address;
        $infomation -> support = $req -> support;
        $infomation -> phone = $req -> phone;
        $infomation -> hotline = $req -> hotline;
        $infomation -> slogan = $req -> slogan;
        if($req -> hasFile('file')){
            $file = $req -> file;
            $file_name = $file -> getClientOriginalName();
            $infomation -> image = $file_name;
            $file -> move('images', $file_name);
        }
        $infomation -> website = $req -> website;
        $infomation -> fanpage = $req -> fanpage;
        $infomation -> save();
        return redirect('infomation/list');
    }
    
    public function getDelete($id)
    {
        $infomation = Infomation::find($id);
        $infomation -> delete();
        return redirect('infomation/list');
    }
}
