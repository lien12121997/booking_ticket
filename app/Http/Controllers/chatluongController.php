<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatluong;


class chatluongController extends Controller
{
    public function getList()
    {
        $chatluong = Chatluong::all();
        return view('chatluong.list',compact('chatluong'));
    }

    public function getInsert()
    {
        return view('chatluong.insert');
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
    	$chatluong = new Chatluong();
    	$chatluong -> name = $req -> name;
    	$chatluong -> save();
    	return redirect('chatluong/list');

    }

    public function getUpdate($id)
    {
        $chatluong = Chatluong::find($id);
        return view('chatluong.update',compact('chatluong'));
    }


    public function postUpdate(Request $request, $id)
    {
        $chatluong  = Chatluong::find($id);
        $chatluong -> name = $request -> name;
        $chatluong -> save();
        return redirect('chatluong/list');
    }
    
    public function getDelete($id)
    {
        $chatluong = Chatluong::find($id);
        $chatluong -> delete();
        return redirect('chatluong/list');
    }
}
