<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Products;
use App\product_image;

class adminController extends Controller
{
    public function __construct() {
        $this->middleware('admin',['except' => 'getLogout']);
    }

    public function index()
    {
        $admin = User::all();
    	return view('admin/home', compact('admin'));
    }

    //Profile Admin
    public function AdminProfile($id)
    {
        $admin = User::find($id);
        return view('admin/profile', ['admin'=>$admin]);
    }

    //List Users
    public function listUser()
    {
    	$User = User::all();
    	return view('admin/user/listUser',['User'=>$User]);
    }

     //List Profile
    public function userProfile($id)
    {
    	$User = User::find($id);
    	return view('admin/user/user_detail',['User'=>$User]);
    }

    //Update Password
    public function changePassAdmin($id)
    {
        $users = User::find($id);
        return view('admin.changePass',['users'=>$users]);
    }


    public function postchangePassAdmin(Request $request, $id)
    {
        $this -> validate( $request,
            [
                'passwordOld' => 'required',
                'passwordNew' => 'required|min:6',
            ],
            [
                'passwordOld.required' => 'Please enter the Current Password!',
                'passwordNew.required' => 'Please enter the New Password!',
                'passwordNew.min' => 'Passwords must contain at least 6 characters',
            ]); 

        if(!(Hash::check($request -> passwordOld, User::find($id) -> password )))
        {
            return redirect('admin/changepass/'.$id) -> with('error','Your current password does not matches with the password you provided. Please try again.');
        }
        else if (strcmp($request -> passwordOld, $request -> passwordNew) == 0) 
        {
            return redirect('admin/changepass/'.$id) -> with('error', 'New Password cannot be same as your current password. Please choose a different password.');
        }
        
        $admin = User::find($id);
        $admin -> password = $request -> passwordNew;
        $admin -> save();
        return redirect('admin/profile/'.$id);
    }

}
