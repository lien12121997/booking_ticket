<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cachieu;

class cachieuController extends Controller
{
    public function getList()
    {
        $cachieu = Cachieu::all();
        return view('cachieu.list',compact('cachieu'));
    }

    public function getInsert()
    {
        return view('cachieu.insert');
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'name' => 'required|min:2|max:255',
                'start' =>'required',
                'end' =>'required',
            ],
            [
                'name.required' => 'Tiêu đề không được để trống',
                'start.required' => 'Thời gian bắt đầu không được để trống',
                'end.required' => 'Thời gian kết thúc không được để trống',
                'name.min' => 'Tiều đề phải từ 2 ký tự đến 255 ký tự',
                'name.max' => 'Tiêu đề phải từ 2 ký tự đến 255 ký tự',
            ]);
    	$cachieu = new Cachieu();
    	$cachieu -> name = $req -> name;
    	$cachieu -> start = $req -> start;
    	$cachieu -> end = $req -> end;
    	$cachieu -> save();
    	return redirect('cachieu/list');

    }

    public function getUpdate($id)
    {
        $cachieu = Cachieu::find($id);
        return view('cachieu.update',compact('cachieu'));
    }


    public function postUpdate(Request $request, $id)
    {
        $cachieu  = Cachieu::find($id);
        $cachieu -> name = $request -> name;
    	$cachieu -> start = $request -> start;
    	$cachieu -> end = $request -> end;
        $cachieu -> save();
        return redirect('cachieu/list');
    }
    
    public function getDelete($id)
    {
        $cachieu = Cachieu::find($id);
        $cachieu -> delete();
        return redirect('cachieu/list');
    }
}
