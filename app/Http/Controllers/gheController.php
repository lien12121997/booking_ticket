<?php

namespace App\Http\Controllers;
use App\Ghe;

use Illuminate\Http\Request;

class gheController extends Controller
{
    public function getList()
    {
        $ghe = Ghe::all();
        return view('ghe.list',compact('ghe'));
    }

    public function getInsert()
    {
        return view('ghe.insert');
    }


    public function postInsert(Request $req)
    {
         $this -> validate( $req,
            [
                'name' => 'required|min:2|max:255',
                'price' => 'required',
            ],
            [
                'name.required' => 'Tiêu đề không được để trống',
                'price.required' => 'Giá ghế không được để trống',
                'name.min' => 'Tiều đề phải từ 2 ký tự đến 255 ký tự',
                'name.max' => 'Tiêu đề phải từ 2 ký tự đến 255 ký tự',
            ]);
    	$ghe = new Ghe();
    	$ghe -> name = $req -> name;
    	$ghe -> price = $req -> price;
    	$ghe -> save();
    	return redirect('ghe/list');

    }

    public function getUpdate($id)
    {
        $ghe = Ghe::find($id);
        return view('ghe.update',compact('ghe'));
    }


    public function postUpdate(Request $request, $id)
    {
        $ghe  = Ghe::find($id);
        $ghe -> name = $request -> name;
        $ghe -> price = $request -> price;
        $ghe -> save();
        return redirect('ghe/list');
    }
    
    public function getDelete($id)
    {
        $ghe = Ghe::find($id);
        $ghe -> delete();
        return redirect('ghe/list');
    }
}
